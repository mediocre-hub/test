<?php

namespace Mediocre\Test;

class Test
{
    public function getClassName()
    {
        return "test";
    }

    /**
     *构建地址json索引串
     */
    public function buildRegionJson()
    {
        /*$regionSets = db("option")->where(array("class_id" => 3, "disabled" => 0))->order("unique asc")->column("name", "unique");
        $jsonSets = array();
        foreach ($regionSets as $regionCode => $regionValue) {
            //省是前两位，市是中两位，县是后两位，切开获取，直接按照resultSets写入数组
            $regionCode = intval($regionCode);
            $provinceCode = substr($regionCode, 0, 2);
            $cityCode = substr($regionCode, 2, 2);
            $countyCode = substr($regionCode, -2, 2);
            $jsonSets[$provinceCode][$cityCode][$countyCode] = $regionValue;
        }*/
    }
}