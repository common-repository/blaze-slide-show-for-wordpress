<?php
function blaze_get_def_settings()
{
	$blaze_settings = array('bannerWidth' => '670',
		'bannerHeight' => '350',
		'backgroundColor' => '#ffffff',
		'gbackgroundColor1' => '#94AC5A',
		'galpha' => '1',
		'gcolortype' => 'plain',
		'gbackgroundColor' => '#FFFFFF',
		'gbackgroundColorend' => '#FFFFFF',
		'galphaend' => '1',
		'cornerRadius' => '8',
		'mbackgroundColor' => '#94AC5A',
		'malpha' => '1',
		'gcolortypebackground' => 'plain',
		'gbackgroundbackColor2' => '#EAEAEA',
		'fillgalpha' => '1',
		'gbackgroundbackColor2end' => '#EAEAEA',
		'fillgalphaend' => '1',
		'fillcornerRadius' => '8',
		'mtcolortype' => 'plain',
		'mtbackgroundColor' => '#000000',
		'mtalpha' => '0.5',
		'mtdefaultTextColor' => '#FFFFFF',
		'displayMethod' => 'allTime',
		'mtposition' => 'top',
		'preloaderColor' => '#3F5705',
		'preloaderalpha' => '0.5',
		'cbackgroundColor1' => '#FFFFFF',
		'calpha1' => '1',
		'cgfcolortype1' => 'gradient',
		'cgfbackgroundColor' => '#9BAB72',
		'cgfalpha1' => '1',
		'cgfbackgroundColor1' => '#9BAB72',
		'cgfalpha' => '1',
		'fillcornerRadius1' => '5',
		'cgbbackgroundColor' => '#FFFFFF',
		'cgbalpha' => '0.7',
		'overcgbbackgroundColor' => '#FFFFFF',
		'overcgbalpha' => '0.7',
		'downcgbbackgroundColor' => '#FFFFFF',
		'downcgbalpha' => '0.3',
		'cgup' => '#323232',
		'buttoncgbalpha' => '0.7',
		'cgover' => '#5898F3',
		'buttonovercgbalpha' => '1',
		'cgdown' => '#323232',
		'buttondowncgbalpha' => '0.3',
		'ccbup' => '#F2F2F2',
		'imgbuttonalpha' => '0',
		'ccbgover' => '#E7E7E7',
		'imageovercgbalpha' => '0.7',
		'ccbgdown' => '#F2F2F2',
		'imagedowncgbalpha' => '0.3',
		'imageselectedcolor' => '#FFFFFF',
		'selectedimagebalpha' => '0.7',
		'cclup' => '#FFFFFF',
		'lcgbalpha' => '1',
		'cclgover' => '#3F5705',
		'lableovercgbalpha' => '1',
		'cclgdown' => '#3F5705',
		'cclgalpha' => '1',
		'labelimageselectedcolor' => '#3F5705',
		'lableselectedimagebalpha' => '1',
		'cttbackgroundcolor' => '#FFFFFF',
		'cttbackgroundalpha' => '1',
		'fillcttbackgroundcolor' => '#000000',
		'fillcttbackgroundalpha' => '1',
		'ctttextColor' => '#323232',
		'filllabelcttbackgroundalpha' => '1',
		'cposition' => 'bottom',
		'cDisplay' => 'show',
		'effectType' => '2',
		'effectDelay' => '1000',
		'closingEffect' => 'default',
		'descEffect' => '2',
		'displayTime' => '3',
		'autoplay' => 'no',
		'random_slide' => 'no',
		'fullscale' => 'no',
		'show_desc' => 'yes',
		'show_title' => 'yes',
		'wmode' => 'transparent',
		'windowOpen' => 'current',
		'use_link'	=> 'no'	
			);
	return $blaze_settings;
}
function __get_blaze_xml_settings()
{
	$ops = get_option('blaze_settings', array());
	$xml_settings = '<background>
			<border>
			<color code="'.$ops['gbackgroundColor1'].'" alpha="'.$ops['galpha'].'" />
			</border>
			<fill type="'.$ops['gcolortype'].'">
			<color code="'.$ops['gbackgroundColor'].'" alpha="'.$ops['galphastart'].'"/>
			<color code="'.$ops['gbackgroundColorend'].'" alpha="'.$ops['galphaend'].'"
			/>
			</fill>
			<cornerRadius>'.$ops['cornerRadius'].'</cornerRadius>
				</background>';

	$xml_settings .= '
		<mainPanel>
			<background>
			<border>
			<color code="'.$ops['mbackgroundColor'].'" alpha="'.$ops['malpha'].'" />
				</border>
			<fill type="'.$ops['gcolortypebackground'].'">
			<color code="'.$ops['gbackgroundbackColor2'].'" alpha="'.$ops['fillgalpha'].'"/>
			<color code="'.$ops['gbackgroundbackColor2end'].'" alpha="'.$ops['fillgalphaend'].'"/>
			</fill>
			<cornerRadius>'.$ops['cornerRadius'].'</cornerRadius>
			</background>';

	$xml_settings .= '
				
				<descriptionBar>
				<backgroundColor type="'.$ops['mtcolortype'].'">
					<color code="'.$ops['mtbackgroundColor'].'" alpha="'.$ops['mtalpha'].'" />
					</backgroundColor>
				<defaultTextColor>'.$ops['mtdefaultTextColor'].'</defaultTextColor>
				<displayMethod>'.$ops['displayMethod'].'</displayMethod>
				<position>'.$ops['mtposition'].'</position>
			</descriptionBar>
			<preloaderColor color="'.$ops['preloaderColor'].'" alpha="'.$ops['preloaderalpha'].'" />
			
		</mainPanel>
		<controlsPanel>
		<background>
				<border>
		<color code="'.$ops['cbackgroundColor1'].'" alpha="'.$ops['calpha1'].'" />
			</border>
				<fill type="'.$ops['cgfcolortype1'].'">
						<color code="'.$ops['cgfbackgroundColor'].'" alpha="'.$ops['cgfalpha1'].'" />
						<color code="'.$ops['cgfbackgroundColor1'].'" alpha="'.$ops['cgfalpha'].'" />
						</fill>
			<cornerRadius>'.$ops['fillcornerRadius1'].'</cornerRadius>
			</background>';

	$xml_settings .= '
			
			<globalButtons>
				<backgroundColor>
					<up color="'.$ops['cgbbackgroundColor'].'" alpha="'.$ops['cgbalpha'].'"/>
							<over color="'.$ops['overcgbbackgroundColor'].'" alpha="'.$ops['overcgbalpha'].'"/>
							<down color="'.$ops['downcgbbackgroundColor'].'" alpha="'.$ops['downcgbalpha'].'"/>';

	$xml_settings .= '
					</backgroundColor>
				<labelColor>
					<up color="'.$ops['cgup'].'" alpha="'.$ops['cgbalpha'].'"/>
							<over color="'.$ops['cgover'].'" alpha="'.$ops['overcgbalpha'].'"/>
							<down color="'.$ops['cgdown'].'" alpha="'.$ops['downcgbalpha'].'"/>
					
				</labelColor>
			</globalButtons>
			
			<imageButtons>
				<backgroundColor>
					<up color="'.$ops['ccbup'].'" alpha="'.$ops['imgbuttonalpha'].'"/>
							<over color="'.$ops['ccbgover'].'" alpha="'.$ops['imageovercgbalpha'].'"/>
							<down color="'.$ops['ccbgdown'].'" alpha="'.$ops['imagedowncgbalpha'].'"/>
							<selected color="'.$ops['imageselectedcolor'].'" alpha="'.$ops['selectedimagebalpha'].'"/>
				</backgroundColor>
				<labelColor>
					<up color="'.$ops['cclup'].'"
						alpha="'.$ops['lcgbalpha'].'"/>
							<over color="'.$ops['cclgover'].'"
						alpha="'.$ops['lableovercgbalpha'].'"/>
							<down color="'.$ops['cclgdown'].'"
						alpha="'.$ops['cclgalpha'].'"/>
					<selected color="'.$ops['labelimageselectedcolor'].'"
						alpha="'.$ops['lableselectedimagebalpha'].'"/>
					</labelColor>
				</imageButtons>
							
				<tooltip>
				<backgroundColor>
						<border color="'.$ops['cttbackgroundcolor'].'"
						alpha="'.$ops['cttbackgroundalpha'].'"/>
							<fill color="'.$ops['fillcttbackgroundcolor'].'"
						alpha="'.$ops['fillcttbackgroundalpha'].'"/>
					<labelColor color="'.$ops['ctttextColor'].'" alpha="'.$ops['filllabelcttbackgroundalpha'].'"/>
				</backgroundColor>
				</tooltip>
			
			<position>'.$ops['cposition'].'</position>
			<displayType>'.$ops['cDisplay'].'</displayType>
				</controlsPanel>
		
		<priceTag enabled="no">
			<position>TL</position>
			<textSize>18</textSize>
			<currency>
				<base>
					<color code="#FFFFFF" alpha="0.8" />
					<color code="#CECECE" alpha="0.8" />
				</base>
				<label color="#FF00CC" alpha="0.8" />
				<symbol>$</symbol>
			</currency>
			<price>
				<base color="#FF00CC" alpha="0.5" />
				<label color="#101010" alpha="0.8" />
			</price>
		</priceTag>



	<imageEffect>
		<type>'.$ops['effectType'].'</type>
		<time>'.$ops['effectDelay'].'</time>
		<closingEffect>'.$ops['closingEffect'].'</closingEffect>
		</imageEffect>



	<descriptionEffect>
			<type>'.$ops['descEffect'].'</type>
		</descriptionEffect>

		<autoplay>	
			<displayTime>'.$ops['displayTime'].'</displayTime>
			<default>'.$ops['autoplay'].'</default>
			<randomly>'.$ops['random_slide'].'</randomly>
		</autoplay>';
	return $xml_settings;
}
function blaze_get_album_dir($album_id)
{
	global $gblz;
	$album_dir = BLZ_PLUGIN_UPLOADS_DIR . "/{$album_id}_uploadfolder";
	return $album_dir;
}
/**
 * Get album url
 * @param $album_id
 * @return unknown_type
 */
function blaze_get_album_url($album_id)
{
	global $gblz;
	$album_url = BLZ_PLUGIN_UPLOADS_URL . "/{$album_id}_uploadfolder";
	return $album_url;
}
function blaze_get_table_actions(array $tasks)
{
	?>
	<div class="bulk_actions">
		<form action="" method="post" class="bulk_form">Bulk action
			<select name="task">
				<?php foreach($tasks as $t => $label): ?>
				<option value="<?php print $t; ?>"><?php print $label; ?></option>
				<?php endforeach; ?>
			</select>
			<button class="button-secondary do_bulk_actions" type="submit">Do</button>
		</form>
	</div>
	<?php 
}
function shortcode_display_blaze_gallery($atts)
{
	$vars = shortcode_atts( array(
									'cats' => '',
									'imgs' => '',
								), 
							$atts );
	//extract( $vars );
	
	$ret = display_blaze_gallery($vars);
	return $ret;
}
function display_blaze_gallery($vars)
{
	global $wpdb, $gblz;
	$ops = get_option('blaze_settings', array());
	//print_r($ops);
	$albums = null;
	$images = null;
	$cids = trim($vars['cats']);
	if (strlen($cids) != strspn($cids, "0123456789,")) {
		$cids = '';
		$vars['cats'] = '';
	}
	$imgs = trim($vars['imgs']);
	if (strlen($imgs) != strspn($imgs, "0123456789,")) {
		$imgs = '';
		$vars['imgs'] = '';
	}
	$categories = '';
	$xml_filename = '';
	if( !empty($cids) && $cids{strlen($cids)-1} == ',')
	{
		$cids = substr($cids, 0, -1);
	}
	if( !empty($imgs) && $imgs{strlen($imgs)-1} == ',')
	{
		$imgs = substr($imgs, 0, -1);
	}
	//check for xml file
	if( !empty($vars['cats']) )
	{
		$xml_filename = "cat_".str_replace(',', '', $cids) . '.xml';	
	}
	elseif( !empty($vars['imgs']))
	{
		$xml_filename = "image_".str_replace(',', '', $imgs) . '.xml';
	}
	else
	{
		$xml_filename = "blaze_all.xml";
	}
	//die(BLZ_PLUGIN_XML_DIR . '/' . $xml_filename);

	$imageContainer = "";
	
	if( !empty($vars['cats']) )
	{
		$query = "SELECT * FROM {$wpdb->prefix}blaze_albums WHERE album_id IN($cids) AND status = 1 ORDER BY `order` ASC";
		//print $query;
		$albums = $wpdb->get_results($query, ARRAY_A);
		foreach($albums as $key => $album)
		{
			$images = $gblz->blaze_get_album_images($album['album_id']);
			if ($images && !empty($images) && is_array($images)) {
			$album_dir = blaze_get_album_url($album['album_id']);//BLZ_PLUGIN_UPLOADS_URL . '/' . $album['album_id']."_".$album['name'];
			foreach($images as $key => $img)
			{
				if( $img['status'] == 0 ) continue;
				$imageContainer .= "<image>";
					$imageContainer .= "<main scale=\"{$ops['fullscale']}\">".str_replace(" ","-",$album_dir)."/big/{$img['image']}</main>";
					$imageContainer .= "<label><![CDATA[".($ops['show_title']=='yes'?$img['title']:"")."]]></label>";
					$imageContainer .= "<description defaultColor=\"".$ops['Defaultcolor']."\"><![CDATA[".($ops['show_desc']=='no'||$img['description']==""?"":$img['description'])."]]></description>";
					$imageContainer .= "<link window=\"".$ops['windowOpen']."\">{$img['link']}</link>";
					$imageContainer .= "<price>0.00</price>";
					$imageContainer .= "</image>";
			}
			}
		}
		//$xml_filename = "cat_".str_replace(',', '', $cids) . '.xml';
	}
	elseif( !empty($vars['imgs']))
	{
		$query = "SELECT * FROM {$wpdb->prefix}blaze_images WHERE image_id IN($imgs) AND status = 1 ORDER BY `order` ASC";
		$images = $wpdb->get_results($query, ARRAY_A);
		if ($images && !empty($images) && is_array($images)) {
		foreach($images as $key => $img)
		{
			$album = $gblz->blaze_get_album($img['category_id']);
			$album_dir = blaze_get_album_url($album['album_id']);//BLZ_PLUGIN_UPLOADS_URL . '/' . $album['album_id']."_".$album['name'];

			if( $img['status'] == 0 ) continue;
			$imageContainer .= "<image>";
					$imageContainer .= "<main scale=\"{$ops['fullscale']}\">".str_replace(" ","-",$album_dir)."/big/{$img['image']}</main>";
					$imageContainer .= "<label><![CDATA[".($ops['show_title']=='yes'?$img['title']:"")."]]></label>";
					$imageContainer .= "<description defaultColor=\"".$ops['Defaultcolor']."\"><![CDATA[".($ops['show_desc']=='no'||$img['description']==""?"":$img['description'])."]]></description>";
					$imageContainer .= "<link window=\"".$ops['windowOpen']."\">{$img['link']}</link>";
					$imageContainer .= "<price>0.00</price>";
					$imageContainer .= "</image>";
		}
		}
	}
	//no values paremeters setted
	else//( empty($vars['cats']) && empty($vars['imgs']))
	{
		$query = "SELECT * FROM {$wpdb->prefix}blaze_albums WHERE status = 1 ORDER BY `order` ASC";
		$albums = $wpdb->get_results($query, ARRAY_A);
		foreach($albums as $key => $album)
		{
			$images = $gblz->blaze_get_album_images($album['album_id']);
			$album_dir = blaze_get_album_url($album['album_id']);//BLZ_PLUGIN_UPLOADS_URL . '/' . $album['album_id']."_".$album['name'];
			if ($images && !empty($images) && is_array($images)) {
			foreach($images as $key => $img)
			{
				if($img['status'] == 0 ) continue;
				
				$imageContainer .= "<image>";
					$imageContainer .= "<main scale=\"{$ops['fullscale']}\">".str_replace(" ","-",$album_dir)."/big/{$img['image']}</main>";
					$imageContainer .= "<label><![CDATA[".($ops['show_title']=='yes'?$img['title']:"")."]]></label>";
					$imageContainer .= "<description defaultColor=\"".$ops['Defaultcolor']."\"><![CDATA[".($ops['show_desc']=='no'||$img['description']==""?"":$img['description'])."]]></description>";
					$imageContainer .= "<link window=\"".$ops['windowOpen']."\">{$img['link']}</link>";
					$imageContainer .= "<price>0.00</price>";
					$imageContainer .= "</image>";
			}
			}
		}
		//$xml_filename = "blaze_all.xml";
	}
	
	$xml_tpl = __get_blaze_xml_template();
	$settings = __get_blaze_xml_settings();
//	$xml = str_replace(array('{settings}', '{default_category}', '{categories}'), 
//						array($settings, $album['album_id'], $categories), $xml_tpl);
	$xml = str_replace(array('{settings}', '{image_container}'), 
						array($settings, $imageContainer), $xml_tpl);
						
	//write new xml file
	$fh = fopen(BLZ_PLUGIN_XML_DIR . '/' . $xml_filename, 'w+');
	fwrite($fh, $xml);
	fclose($fh);
	//print "<h3>Generated filename: $xml_filename</h3>";
	//print $xml;
	if( file_exists(BLZ_PLUGIN_XML_DIR . '/' . $xml_filename ) )
	{
		$fh = fopen(BLZ_PLUGIN_XML_DIR . '/' . $xml_filename, 'r');
		$xml = fread($fh, filesize(BLZ_PLUGIN_XML_DIR . '/' . $xml_filename));
		fclose($fh);
		//print "<h3>Getting xml file from cache: $xml_filename</h3>";
		$ret_str = "
		<script language=\"javascript\">AC_FL_RunContent = 0;</script>
<script src=\"".BLZ_PLUGIN_URL."/js/AC_RunActiveContent.js\" language=\"javascript\"></script>

		<script language=\"javascript\"> 
	if (AC_FL_RunContent == 0) {
		alert(\"This page requires AC_RunActiveContent.js.\");
	} else {
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0',
			'width', '".$ops['bannerWidth']."',
			'height', '".$ops['bannerHeight']."',
			'src', '".BLZ_PLUGIN_URL."/js/wp_blaze',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'showall',
			'wmode', '".$ops['wmode']."',
			'devicefont', 'false',
			'id', 'xmlswf_vmblz',
			'bgcolor', '".$ops['backgroundColor']."',
			'name', 'xmlswf_vmblz',
			'menu', 'true',
			'allowFullScreen', 'true',
			'allowScriptAccess','sameDomain',
			'movie', '".BLZ_PLUGIN_URL."/js/wp_blaze',
			'salign', '',
			'flashVars','XMLFile=".BLZ_PLUGIN_URL."/xml/$xml_filename'
			); //end AC code
	}
</script>
";
//echo BLZ_PLUGIN_UPLOADS_URL."<hr>";
//		print $xml;
		return $ret_str;
	}
	return true;
}
function __get_blaze_xml_template()
{
	$xml_tpl = '<?xml version="1.0" encoding="utf-8" ?>
				<data>
					<settings>{settings}</settings><!-- end settings -->
					<images>{image_container}					    
					</images><!-- end images -->
				</data>';
	return $xml_tpl;
}
?>