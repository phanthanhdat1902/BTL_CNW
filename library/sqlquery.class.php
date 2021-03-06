<?php

class SQLQuery {

    protected $_dbHandle;
    protected $_result;
    protected $_query;
    protected $_table;
    protected $_describe = array();
    protected $_orderBy;
    protected $_order;
    protected $_extraConditions;
    protected $_hO;
    protected $_hM;
    protected $_hMABTM;
    protected $_page;
    protected $_limit;
    protected $_left_On;

    /** Connects to database * */
    function connect($address, $account, $pwd, $name) {
        $this->_dbHandle = new mysqli($address, $account, $pwd);
        if (!$this->_dbHandle) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if ($this->_dbHandle != null) {
            if (mysqli_select_db($this->_dbHandle, $name)) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }

    /** Disconnects from database * */
    function disconnect() {
        if (@mysqli_close($this->_dbHandle) != 0) {
            return 1;
        } else {
            return 0;
        }
    }

    /** Select Query * */
    function where($field, $value) {
        $this->_extraConditions .= '`' . $this->_model . '`.`' . $field . '` = \'' . mysqli_real_escape_string($this->_dbHandle, htmlentities($value, ENT_QUOTES)) . '\' AND ';
    }

    function like($field, $value) {
        $this->_extraConditions .= '`' . $this->_model . '`.`' . $field . '` LIKE \'%' . mysqli_real_escape_string($this->_dbHandle, htmlentities($value, ENT_QUOTES)) . '%\' AND ';
    }

    function showHasOne() {
        $this->_hO = 1;
    }

    function showHasMany() {
        $this->_hM = 1;
    }

    function showHMABTM() {
        $this->_hMABTM = 1;
    }

    function setLimit($limit) {
        $this->_limit = $limit;
    }

    function setPage($page) {
        $this->_page = $page;
    }

    function orderBy($orderBy, $order = 'ASC') {
        $this->_orderBy = $orderBy;
        $this->_order = $order;
    }

    function leftOn($nameTable1, $field, $nameTable2 = null) {
        if ($nameTable2 == null) {
            $this->_left_On .= 'LEFT JOIN `' . $nameTable1 . '` as `' . $nameTable1 . '` ';
            $this->_left_On .= 'ON `' . $nameTable1 . '`.`' . $field . '` = `' . $this->_model . '`' . '.`' . $field . '`';
        } else {
            $this->_left_On .= 'LEFT JOIN `' . $nameTable1 . '` as `' . $nameTable1 . '` ';
            $this->_left_On .= 'ON `' . $nameTable1 . '`.`' . $field . '` = `' . $nameTable2 . '`' . '.`' . $field . '`';
        }
    }

    function search($fields = null) {

        global $inflect;

        $from = '`' . $this->_table . '` as `' . $this->_model . '` ';
        $conditions = '\'1\'=\'1\' AND ';
        $conditionsChild = '';
        $fromChild = '';
        if (isset($this->_left_On)) {
            $from .= $this->_left_On;
        }
        if ($this->_hO == 1 && isset($this->hasOne)) {

            foreach ($this->hasOne as $alias => $model) {
                $table = strtolower($inflect->pluralize($model));
                $singularAlias = strtolower($alias);
                $from .= 'LEFT JOIN `' . $table . '` as `' . $alias . '` ';
                $from .= 'ON `' . $this->_model . '`.`id_' . $singularAlias . '` = `id_' . $alias . '`';
            }
        }

        if (isset($this->id)) {
            $conditions .= '`' . $this->_model . '`.`id_' . $this->_model . '` = \'' . mysqli_real_escape_string($this->_dbHandle, $this->id) . '\' AND ';
        }

        if ($this->_extraConditions) {
            $conditions .= $this->_extraConditions;
        }

        $conditions = substr($conditions, 0, -4);

        if (isset($this->_orderBy)) {
            $conditions .= ' ORDER BY `' . $this->_model . '`.`' . $this->_orderBy . '` ' . $this->_order;
        }

        if (isset($this->_page)) {
            $offset = ($this->_page - 1) * $this->_limit;
            $conditions .= ' LIMIT ' . $this->_limit . ' OFFSET ' . $offset;
        }
        if (isset($fields)) {
            $this->_query = 'SELECT ';
            foreach ($fields as $item):
                $this->_query .= '`' . $item . '`,';
            endforeach;
            $this->_query = substr($this->_query, 0, -1);
            $this->_query .= ' FROM';
        } else {
            $this->_query = 'SELECT * FROM ';
        }
        #echo '<!--'.$this->_query.'-->';
        $this->_query .= $from . ' WHERE ' . $conditions;
        $this->_result = mysqli_query($this->_dbHandle, $this->_query);
        $result = array();
        $table = array();
        $field = array();
        $tempResults = array();
        $numOfFields = mysqli_num_fields($this->_result);
        for ($i = 0; $i < $numOfFields; ++$i) {
            $finfo = $this->_result->fetch_field_direct($i);
            array_push($table, $finfo->table);
            array_push($field, $finfo->name);
        }
        if (mysqli_num_rows($this->_result) > 0) {
            while ($row = mysqli_fetch_row($this->_result)) {
                for ($i = 0; $i < $numOfFields; ++$i) {
//                    $table[$i] = trim(ucfirst($table[$i]), "s");
                    $tempResults[$table[$i]][$field[$i]] = $row[$i];
                }

                if ($this->_hM == 1 && isset($this->hasMany)) {
                    foreach ($this->hasMany as $aliasChild => $modelChild) {
                        $queryChild = '';
                        $conditionsChild = '';
                        $fromChild = '';

                        $tableChild = strtolower($inflect->pluralize($modelChild));
                        $pluralAliasChild = strtolower($inflect->pluralize($aliasChild));
                        $singularAliasChild = strtolower($aliasChild);

                        $fromChild .= '`' . $tableChild . '` as `' . $aliasChild . '`';

                        $conditionsChild .= '`' . $aliasChild . '`.`' . strtolower($this->_model) . '_id` = \'' . $tempResults[$this->_model]['id'] . '\'';

                        $queryChild = 'SELECT * FROM ' . $fromChild . ' WHERE ' . $conditionsChild;
                        #echo '<!--'.$queryChild.'-->';
                        $resultChild = mysqli_query($this->_dbHandle, $queryChild);

                        $tableChild = array();
                        $fieldChild = array();
                        $tempResultsChild = array();
                        $resultsChild = array();

                        if (mysqli_num_rows($resultChild) > 0) {
                            $numOfFieldsChild = mysqli_num_fields($resultChild);
                            for ($j = 0; $j < $numOfFieldsChild; ++$j) {
                                array_push($tableChild, mysqli_fetch_field_direct($resultChild, $j));
                                array_push($fieldChild, mysqli_fetch_field_direct($resultChild, $j));
                            }

                            while ($rowChild = mysqli_fetch_row($resultChild)) {
                                for ($j = 0; $j < $numOfFieldsChild; ++$j) {
                                    $tempResultsChild[$tableChild[$j]][$fieldChild[$j]] = $rowChild[$j];
                                }
                                array_push($resultsChild, $tempResultsChild);
                            }
                        }

                        $tempResults[$aliasChild] = $resultsChild;

                        mysqli_free_result($resultChild);
                    }
                }


                if ($this->_hMABTM == 1 && isset($this->hasManyAndBelongsToMany)) {
                    foreach ($this->hasManyAndBelongsToMany as $aliasChild => $tableChild) {
                        $queryChild = '';
                        $conditionsChild = '';
                        $fromChild = '';

                        $tableChild = strtolower($inflect->pluralize($tableChild));
                        $pluralAliasChild = strtolower($inflect->pluralize($aliasChild));
                        $singularAliasChild = strtolower($aliasChild);

                        $sortTables = array($this->_table, $pluralAliasChild);
                        sort($sortTables);
                        $joinTable = implode('_', $sortTables);

                        $fromChild .= '`' . $tableChild . '` as `' . $aliasChild . '`,';
                        $fromChild .= '`' . $joinTable . '`,';

                        $conditionsChild .= '`' . $joinTable . '`.`' . $singularAliasChild . '_id` = `' . $aliasChild . '`.`id` AND ';
                        $conditionsChild .= '`' . $joinTable . '`.`' . strtolower($this->_model) . '_id` = \'' . $tempResults[$this->_model]['id'] . '\'';
                        $fromChild = substr($fromChild, 0, -1);

                        $queryChild = 'SELECT * FROM ' . $fromChild . ' WHERE ' . $conditionsChild;
                        #echo '<!--'.$queryChild.'-->';
                        $resultChild = mysqli_query($this->_dbHandle, $queryChild);

                        $tableChild = array();
                        $fieldChild = array();
                        $tempResultsChild = array();
                        $resultsChild = array();

                        if (mysqli_num_rows($resultChild) > 0) {
                            $numOfFieldsChild = mysqli_num_fields($resultChild);
                            for ($j = 0; $j < $numOfFieldsChild; ++$j) {
                                array_push($tableChild, mysqli_fetch_field_direct($resultChild, $j));
                                array_push($fieldChild, mysqli_fetch_field_direct($resultChild, $j));
                            }

                            while ($rowChild = mysqli_fetch_row($resultChild)) {
                                for ($j = 0; $j < $numOfFieldsChild; ++$j) {
                                    $tempResultsChild[$tableChild[$j]][$fieldChild[$j]] = $rowChild[$j];
                                }
                                array_push($resultsChild, $tempResultsChild);
                            }
                        }

                        $tempResults[$aliasChild] = $resultsChild;
                        mysqli_free_result($resultChild);
                    }
                }

                array_push($result, $tempResults);
            }

            if (mysqli_num_rows($this->_result) == 1 && isset($this->id)) {
                mysqli_free_result($this->_result);
                $this->clear();
                return($result[0]);
            } else {
                mysqli_free_result($this->_result);
                $this->clear();
                return($result);
            }
        } else {
            mysqli_free_result($this->_result);
            $this->clear();
            return $result;
        }
    }

    /** Custom SQL Query * */
    function custom($query) {

        global $inflect;

        $this->_result = mysqli_query($this->_dbHandle, $query);

        $result = array();
        $table = array();
        $field = array();
        $tempResults = array();

        if (substr_count(strtoupper($query), "SELECT") > 0) {
            if (mysqli_num_rows($this->_result) > 0) {
                $numOfFields = mysqli_num_fields($this->_result);
                for ($i = 0; $i < $numOfFields; ++$i) {
                    array_push($table, mysqli_fetch_field_direct($this->_result, $i)->table);
                    array_push($field, mysqli_fetch_field_direct($this->_result, $i)->name);
                }
                while ($row = mysqli_fetch_row($this->_result)) {
                    for ($i = 0; $i < $numOfFields; ++$i) {
                        $table[$i] = ucfirst($inflect->singularize($table[$i]));
                        $tempResults[$table[$i]][$field[$i]] = $row[$i];
                    }
                    array_push($result, $tempResults);
                }
            }
            mysqli_free_result($this->_result);
        }
        $this->clear();
        return($result);
    }

    /** Describes a Table * */
    protected function _describe() {
        global $cache;

        $this->_describe = $cache->get('describe' . $this->_table);

        if (!$this->_describe) {
            $this->_describe = array();
            $query = 'DESCRIBE ' . $this->_table;
            $this->_result = mysqli_query($this->_dbHandle, $query);
            while ($row = mysqli_fetch_row($this->_result)) {
                array_push($this->_describe, $row[0]);
            }

            mysqli_free_result($this->_result);
            $cache->set('describe' . $this->_table, $this->_describe);
        }

        foreach ($this->_describe as $field) {
            $this->$field = null;
        }
    }

    /** Delete an Object * */
    function delete() {
        if (isset($this->id)) {
            $query = 'DELETE FROM ' . $this->_table . ' WHERE `id_' . $this->_model . '`=\'' . mysqli_real_escape_string($this->_dbHandle, $this->id) . '\'';
            $this->_result = mysqli_query($this->_dbHandle, $query);
            $this->clear();
            if ($this->_result == 0) {
                /** Error Generation * */
                return -1;
            }
        } else {
            $conditions = substr($this->_extraConditions, 0, -4);
            $query = 'DELETE FROM ' . $this->_table . ' as`' . $this->_model . '` WHERE ' . $conditions;
            $this->_result = mysqli_query($this->_dbHandle, $query);
            $this->clear();
            if ($this->_result == 0) {
                /** Error Generation * */
                return -1;
            }
        }
    }

    /** Saves an Object i.e. Updates/Inserts Query * */
    function save() {
        $query = '';
        if (isset($this->id)) {
            $updates = '';
            foreach ($this->_describe as $field) {
                if (isset($this->$field)) {
                    $updates .= '`' . $field . '` = \'' . mysqli_real_escape_string($this->_dbHandle, htmlentities($this->$field)) . '\',';
                }
            }

            $updates = substr($updates, 0, -1);

            $query = 'UPDATE ' . $this->_table . ' SET ' . $updates . ' WHERE `id_' . $this->_model . '`=\'' . mysqli_real_escape_string($this->_dbHandle, $this->id) . '\'';
        } else {
            $fields = '';
            $values = '';
            foreach ($this->_describe as $field) {
                if (isset($this->$field)) {
                    if (strpos($field, 'id') === 0) {
                        $fields .= '`' . $field . '`,';
                        $values .= mysqli_real_escape_string($this->_dbHandle, mysqli_real_escape_string($this->_dbHandle,htmlentities($this->$field, ENT_QUOTES))) . ',';
                    } else {
                        $fields .= '`' . $field . '`,';
                        $values .= '\'' . mysqli_real_escape_string($this->_dbHandle, htmlentities($this->$field, ENT_QUOTES)) . '\',';
                    }
                }
            }
            $values = substr($values, 0, -1);
            $fields = substr($fields, 0, -1);

            $query = 'INSERT INTO ' . $this->_table . ' (' . $fields . ') VALUES (' . $values . ')';
        }
        $this->_result = mysqli_query($this->_dbHandle, $query);
        $this->clear();
        if ($this->_result == 0) {
            /** Error Generation * */
            return -1;
        }
    }

    /** Clear All Variables * */
    function clear() {
        foreach ($this->_describe as $field) {
            $this->$field = null;
        }

        $this->_orderby = null;
        $this->_extraConditions = null;
        $this->_hO = null;
        $this->_hM = null;
        $this->_hMABTM = null;
        $this->_page = null;
        $this->_order = null;
    }

    /** Pagination Count * */
    function totalPages() {
        if ($this->_limit) {
            $countQuery = 'SELECT COUNT(*) FROM ' . $this->_table;
            $this->_result = mysqli_query($this->_dbHandle, $countQuery);
            $row = mysqli_fetch_row($this->_result)[0];
            $totalPages = ceil($row / $this->_limit);
            return $totalPages;
        } else {
            /* Error Generation Code Here */
            return -1;
        }
    }

    function getLastId() {
        return $this->_dbHandle->insert_id;
    }

    /** Get error string * */
    function getError() {
        return mysqli_error($this->_dbHandle);
    }

}
