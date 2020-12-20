<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of themescontroller
 *
 * @author dat.pt173001
 */
class Theme_toursController extends Controller {

    function beforeAction() {
        
    }

    /*

     * Ham lay toan bo danh sach tour theo chu de */

    function viewall() {
//        $this->Theme_tour->showHasMany();
        $this->Theme_tour->leftOn('tours', 'id_theme_tour');
        // tham so 1 la bang can left join, tham so 2 la cot de join
//        $this->Theme_tour->leftOn('service_tours', 'id_service', 'tours');
        // noi 2 bang voi nhau cung voi bang Theme_tour, tham so 1 la bang can noi,  tham so 2 la cot, tham so 3 la bang noi voi bang trong tham so 1
        $theme_tour = $this->Theme_tour->search();
        $result = [];
        $id = null;
        $arrayTour = array();
        $template_theme = null;
        for ($i = 0; $i < count($theme_tour); $i++) {
            if (isset($theme_tour[$i + 1]['Theme_tour']['id_theme_tour'])) {
                if (isset($theme_tour[$i]['tours']['id_tour'])) {
                    array_push($arrayTour, $theme_tour[$i]['tours']);
                }
                if ($id != $theme_tour[$i + 1]['Theme_tour']['id_theme_tour']) {
                    $template_theme = $theme_tour[$i]['Theme_tour'];
                    $template['tours'] = $arrayTour;
                    $template['theme'] = $template_theme;
                    array_push($result, $template);
                    unset($arrayTour);
                    $arrayTour = array();
                    $id = $theme_tour[$i + 1]['Theme_tour']['id_theme_tour'];
                }
            } else {
                $template['tours'] = $arrayTour;
                $template['theme'] = $template_theme;
                array_push($result, $template);
                unset($arrayTour);
            }
        }
        $theme_tour = $result;
        $this->set('theme_tour', $theme_tour);
    }

    function view($themeId) {
        $result = performAction('tours', 'findTourByThemeId', array($themeId));
//        $this->Theme_tour->id = $themeId;
        $this->Theme_tour->where('id_theme_tour', $themeId);
        $fields = array();
        array_push($fields, 'name');
        $result['Theme_tour'] = $this->Theme_tour->search($fields)[0]['Theme_tour'];
        $this->set('listTour', $result);
    }

    function viewallTheme($themeId = null) {
        if ($themeId != null) {
            $this->Theme_tour->id = $themeId;
        }
        return $this->Theme_tour->search();
    }

    function afterAction() {
        
    }

}
