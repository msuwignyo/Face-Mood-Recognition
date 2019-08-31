<?php

	function field_to_index($array)
	{
		$out = array();
		// print_r($array);
		foreach ($array as $key => $value) {
			$out[$value['nama_field']] = $value;
		}
		return $out;
	}

	function echo_field_result($str)
	{
		$arr 	= explode("|", $str);
		$txt 	= str_replace("_"," ",$arr[0]);
		$txt 	= ucwords($txt);
		$res 	= "";
		switch($arr[1]){
			case 'dropdown' : {
				$js 	= (array)json_decode($arr[2]);
				$jb		= array();
				foreach($js as $j){
					array_push($jb, $j);
				}
				$num	= str_replace("\"","",$arr[3]);
				$res 	= $jb[$num-1];
				break;
			}
			case 'radiobut' : {
				$js 	= (array)json_decode($arr[2]);
				$jb		= array();
				foreach($js as $j){
					array_push($jb, $j);
				}
				$num	= str_replace("\"","",$arr[3]);
				$res 	= $jb[$num-1];
				break;
			}
			case 'varchar' : {
				$res 	= $arr[3];
				break;
			}
			case 'tabel' : {
				$jHead	= json_decode($arr[2]);
				$jBody	= json_decode($arr[3]);

				$res 	= "<table class='table'><thead><tr>";
				foreach($jHead as $thead){
					$res .= "<th>".$thead."</th>";
				}
				$res 	.= "</tr></thead>";
				$res 	.= "<tbody>";
				foreach($jBody as $tbody){
					$res .= "<tr>";
					foreach($tbody as $td){
						$res .= "<td>".$td."</td>";
					}
					$res .= "</tr>";
				}
				$res 	.= "</tbody>";
				break;
			}
			case 'radiobut' : {

				break;
			}
		}

		return "<p><label>".$txt."</label></p>".$res;
	}

	function echo_field($array,$field_name)
	{
		$field = field_to_index($array);
		$field = $field[$field_name];
		// print_r($field);
		$tipe_field = $field['jenis_input'];
		$list_input = $field['list_input'];
		$id_field 	= $field['id_field'];

		switch($tipe_field){
			case 'dropdown' : {
				return echo_dropdown($list_input,$id_field);
				break;
			}
			case 'tabel' : {
				return echo_table($list_input,$id_field);
				break;
			}
			case 'varchar' : {
				return echo_varchar($id_field, $list_input);
				break;
			}
			case 'radiobut' : {
				return echo_radiobut($list_input,$id_field);
				break;
			}
			case 'date' : {
				return echo_date($id_field);
				break;
			}
			case 'textarea' : {
				return echo_textarea($id_field, $list_input);
				break;
			}
		}
	}

	function echo_dropdown($dropdown_field,$id_field)
	{
		$out = "<select class='form-control' name='items[".$id_field."]'>";
		$dropdown = json_decode($dropdown_field);
		foreach ($dropdown as $key => $value) {
			$out .= "<option value='".$key."'>".$value."</option>";
		}
		$out .= "</select>";
		return $out;
	}

	function echo_table($table_field,$id_field)
	{
		$tables = json_decode($table_field);
		$out = "<div id='".$table_field."'>";
		$out .= "<table class='table'>";
		$out .= "<thead>";
		$out .= "<tr><th>No</th>";
		foreach ($tables as $field) {
			$out .= "<th>".$field."</th>";
		}
		$out .= "</tr>";
		$out .= "</thead>";
		$out .= "<tbody>";
		$out .= "<tr><td>1</td>";
		foreach ($tables as $key => $value) {
			$out .= "<td><input class='form-control' required='required' idfield='".$id_field."' kunci='".$key."' name='items[".$id_field."][0][".$key."]'/></td>";
		}
		$out .= "</tr>";
		$out .= "</tbody>";
		$out .= "</table>";
		$out .= "<button type='button' class='btn btn-default tambah-baris'>Tambah Baris</button>";
		$out .= "</div>";
		return $out;
	}

	function echo_varchar($id_field, $list_input = '{}')
	{
		$list_input =  json_decode($list_input);
		$atribut 	= '';

		if( !empty($list_input->atribut) ){
			foreach ($list_input->atribut as $attr => $atributt) {
				$atribut .= " ".$attr."= '".$atributt."'";
			}
		}

		$out = "<div class='form-group'>"; 
		$out .= "<input class='form-control'".$atribut." name='items[".$id_field."]'/>";
		$out .= "</div>";
		return $out;
	}

	function echo_textarea($id_field, $list_input = '{}')
	{
		$list_input =  json_decode($list_input);
		$atribut 	= '';

		if( !empty($list_input->atribut) ){
			foreach ($list_input->atribut as $attr => $atributt) {
				$atribut .= " ".$attr."= '".$atributt."'";
			}
		}
		$out = "<div class='form-group'>";
		$out .= "<textarea class='form-control'".$atribut." name='items[".$id_field."]'>";
		$out .= "</textarea>";
		$out .= "</div>";
		return $out;
	}

	function echo_date($id_field)
	{
		$out = "<div class='form-group'>"; 
		$out .= "<input class='form-control' required='required' type='date' value='".date("Y-m-d")."' name='items[".$id_field."]'/>";
		$out .= "</div>";
		return $out;
	}

	function echo_radiobut($radiobut_field,$id_field)
	{
		$out = "";
		$fields = json_decode($radiobut_field);
		// var_dump($fields);
		foreach ($fields as $key => $value) {
			$out .= "<div class='radio'><label><input type='radio' required='required' name='items[".$id_field."]' value='".$key."'/> ".$value."</label></div>";
		}
		return $out;
	}