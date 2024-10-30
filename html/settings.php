<?php
global $wpdb, $gblz;
$ops = get_option('blaze_settings', array());
//$ops = array_merge($blaze_settings, $ops);
?>
<div class="wrap">
	<h2><?php _e('Create XML File'); ?></h2>
	<form action="" method="post">
		<input type="hidden" name="task" value="save_blaze_settings" />
		<table>
		<tr>
			<td><?php _e('Slideshow Width'); ?></td>
			<td><input type="text" name="settings[bannerWidth]" value="<?php print @$ops['bannerWidth']; ?>" /></td>
		</tr>
		
<tr>
			<td><?php _e('SlideShow Height'); ?></td>
			<td><input type="text" name="settings[bannerHeight]" value="<?php print  @$ops['bannerHeight']; ?>" /></td>
		</tr>
<tr>
			<td><?php _e('Flash Background color'); ?></td>
			<td>
				<input type="text" name="settings[backgroundColor]" class="color {hash:true,caps:false}" value="<?php print @$ops['backgroundColor']; ?>" />
			</td>
		</tr>

<!-- Specific parameters -->
<tr>
			<td><?php _e('Gallery Background color'); ?></td>
			<td>
				<input type="text" name="settings[gbackgroundColor1]" class="color {hash:true,caps:false}" value="<?php print @$ops['gbackgroundColor1']; ?>" />
			</td>
		</tr>

<tr>
			<td><?php _e('Gallery border alpha'); ?></td>
			<td>
				<select name="settings[galpha]"> 
					<option value="0" <?php print (@$ops['galpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['galpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['galpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['galpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['galpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['galpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['galpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['galpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['galpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['galpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['galpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>
			
		<tr>
			<td><?php _e('Gallery BG type'); ?></td>
			<td>
				<input type="radio" name="settings[gcolortype]" value="gradient" <?php print (@$ops['gcolortype'] == 'gradient') ? 'checked' : ''; ?>><span><?php _e('gradient'); ?></span>
				<input type="radio" name="settings[gcolortype]" value="plain" <?php print (@$ops['gcolortype'] == 'plain') ? 'checked' : ''; ?>><span><?php _e('plain'); ?></span>
			</td>
		</tr>

<tr>
			<td><?php _e('Gallery BG gradient start color'); ?></td>
			<td>
			<input type="text" name="settings[gbackgroundColor]" class="color {hash:true,caps:false}" value="<?php print @$ops['gbackgroundColor']; ?>" />
			</td>
		</tr>


<tr>
			<td><?php _e('Gallery BG gradient start alpha'); ?></td>
			<td>
				<select name="settings[gbackgroundColorstart]"> 
					<option value="0" <?php print (@$ops['gbackgroundColorstart'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['gbackgroundColorstart'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['gbackgroundColorstart'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['gbackgroundColorstart'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['gbackgroundColorstart'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['gbackgroundColorstart'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['gbackgroundColorstart'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['gbackgroundColorstart'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['gbackgroundColorstart'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['gbackgroundColorstart'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['gbackgroundColorstart'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>


<tr>
			<td><?php _e('Gallery BG gradient end color'); ?></td>
			<td>
			<input type="text" name="settings[gbackgroundColorend]" class="color {hash:true,caps:false}" value="<?php print @$ops['gbackgroundColorend']; ?>" />
			</td>
		</tr>



<tr>
			<td><?php _e('Gallery BG gradient end alpha'); ?></td>
			<td>
				<select name="settings[galphaend]"> 
					<option value="0" <?php print (@$ops['galphaend'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['galphaend'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['galphaend'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['galphaend'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['galphaend'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['galphaend'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['galphaend'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['galphaend'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['galphaend'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['galphaend'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['galphaend'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Border corner radius'); ?></td>
			<td>
			<input type="text" name="settings[cornerRadius]"  value="<?php print @$ops['cornerRadius']; ?>" />

			</td>
		</tr>

		<tr>
			<td><?php _e('Image Border color'); ?></td>
			<td>
			<input type="text" name="settings[mbackgroundColor]" class="color {hash:true,caps:false}"  value="<?php print @$ops['mbackgroundColor']; ?>" />
			</td>
		</tr>



<tr>
			<td><?php _e('Image Border color alpha'); ?></td>
			<td>
				<select name="settings[malpha]"> 
					<option value="0" <?php print (@$ops['malpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['malpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['malpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['malpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['malpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['malpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['malpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['malpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['malpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['malpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['malpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>


			<tr>
			<td><?php _e('Image BG type'); ?></td>
			<td>
				<input type="radio" name="settings[gcolortypebackground]" value="gradient" <?php print (@$ops['gcolortypebackground'] == 'gradient') ? 'checked' : ''; ?>><span><?php _e('gradient'); ?></span>
				<input type="radio" name="settings[gcolortypebackground]" value="plain" <?php print (@$ops['gcolortypebackground'] == 'plain') ? 'checked' : ''; ?>><span><?php _e('plain'); ?></span>
			</td>
		</tr>


			<tr>
			<td><?php _e('Image BG gradient start color'); ?></td>
			<td>
			<input type="text" name="settings[gbackgroundbackColor2]" class="color {hash:true,caps:false}" value="<?php print @$ops['gbackgroundbackColor2']; ?>" />
			</td>
		</tr>


		<tr>
			<td><?php _e('Image BG start alpha'); ?></td>
			<td>
				<select name="settings[fillgalpha]"> 
					<option value="0" <?php print (@$ops['fillgalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['fillgalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['fillgalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['fillgalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['fillgalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['fillgalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['fillgalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['fillgalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['fillgalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['fillgalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['fillgalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>



			<tr>
			<td><?php _e('Image BG gradient end color'); ?></td>
			<td>
			<input type="text" name="settings[gbackgroundbackColor2end]" class="color {hash:true,caps:false}" value="<?php print @$ops['gbackgroundbackColor2end']; ?>" />
			</td>
		</tr>


		<tr>
			<td><?php _e('Image BG end alpha'); ?></td>
			<td>
				<select name="settings[fillgalphaend]"> 
					<option value="0" <?php print (@$ops['fillgalphaend'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['fillgalphaend'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['fillgalphaend'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['fillgalphaend'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['fillgalphaend'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['fillgalphaend'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['fillgalphaend'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['fillgalphaend'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['fillgalphaend'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['fillgalphaend'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['fillgalphaend'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>


		<tr>
			<td><?php _e('Image corner radius'); ?></td>
			<td>
			<input type="text" name="settings[fillcornerRadius]" class="color {hash:true,caps:false}" value="<?php print @$ops['fillcornerRadius']; ?>" />
			</td>
		</tr>


		<tr>
			<td><?php _e('Description BG color type'); ?></td>
			<td>
				<input type="radio" name="settings[mtcolortype]" value="gradient" <?php print (@$ops['mtcolortype'] == 'gradient') ? 'checked' : ''; ?>><span><?php _e('gradient'); ?></span>
				<input type="radio" name="settings[mtcolortype]" value="plain" <?php print (@$ops['mtcolortype'] == 'plain') ? 'checked' : ''; ?>><span><?php _e('plain'); ?></span>
			</td>
		</tr>


		<tr>
			<td><?php _e('Description BG color'); ?></td>
			<td>
			<input type="text" name="settings[mtbackgroundColor]" class="color {hash:true,caps:false}" value="<?php print @$ops['mtbackgroundColor']; ?>" />
			</td>
		</tr>


	<tr>
			<td><?php _e('Description BG alpha'); ?></td>
			<td>
				<select name="settings[mtalpha]"> 
					<option value="0" <?php print (@$ops['mtalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['mtalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['mtalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['mtalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['mtalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['mtalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['mtalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['mtalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['mtalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['mtalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['mtalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>


		<tr>
			<td><?php _e('Default text color'); ?></td>
			<td>
				<input type="text" name="settings[mtdefaultTextColor]" class="color {hash:true,caps:false}" value="<?php print @$ops['mtdefaultTextColor']; ?>" />
			</td>
		</tr>


			<tr>
			<td><?php _e('Display description'); ?></td>
			<td>
				<input type="radio" name="settings[displayMethod]" value="mouseOver" <?php print (@$ops['displayMethod'] == 'mouseOver') ? 'checked' : ''; ?>><span><?php _e('Mouse Over'); ?></span>
				<input type="radio" name="settings[displayMethod]" value="allTime" <?php print (@$ops['displayMethod'] == 'allTime') ? 'checked' : ''; ?>><span><?php _e('All time'); ?></span>
			</td>
		</tr>

			<tr>
			<td><?php _e('Display description'); ?></td>
			<td>
				<input type="radio" name="settings[mtposition]" value="top" <?php print (@$ops['mtposition'] == 'top') ? 'checked' : ''; ?>><span><?php _e('Top'); ?></span>
				<input type="radio" name="settings[mtposition]" value="bottom" <?php print (@$ops['mtposition'] == 'bottom') ? 'checked' : ''; ?>><span><?php _e('Bottom'); ?></span>
			</td>
		</tr>



		<tr>
			<td><?php _e('Pre Loader Color'); ?></td>
			<td>
				<input type="text" name="settings[preloaderColor]" class="color {hash:true,caps:false}" value="<?php print @$ops['preloaderColor']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Pre Loader alpha'); ?></td>
			<td>
				<select name="settings[preloaderalpha]"> 
					<option value="0" <?php print (@$ops['preloaderalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['preloaderalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['preloaderalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['preloaderalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['preloaderalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['preloaderalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['preloaderalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['preloaderalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['preloaderalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['preloaderalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['preloaderalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Bar Border Color'); ?></td>
			<td>
				<input type="text" name="settings[cbackgroundColor1]" class="color {hash:true,caps:false}" value="<?php print @$ops['cbackgroundColor1']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Bar Border Alpha'); ?></td>
			<td>
				<select name="settings[calpha1]"> 
					<option value="0" <?php print (@$ops['calpha1'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['calpha1'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['calpha1'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['calpha1'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['calpha1'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['calpha1'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['calpha1'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['calpha1'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['calpha1'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['calpha1'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['calpha1'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>


		<tr>
			<td><?php _e('Bar BG type'); ?></td>
			<td>
				<input type="radio" name="settings[cgfcolortype1]" value="gradient" <?php print (@$ops['cgfcolortype1'] == 'gradient') ? 'checked' : ''; ?>><span><?php _e('Gradient'); ?></span>
				<input type="radio" name="settings[cgfcolortype1]" value="plain" <?php print (@$ops['cgfcolortype1'] == 'plain') ? 'checked' : ''; ?>><span><?php _e('Plain'); ?></span>
			</td>
		</tr>

		<tr>
			<td><?php _e('Bar BG start gradient color'); ?></td>
			<td>
				<input type="text" name="settings[cgfbackgroundColor]" class="color {hash:true,caps:false}" value="<?php print @$ops['cgfbackgroundColor']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Bar BG start gradient alpha'); ?></td>
			<td>
				<select name="settings[cgfalpha1]"> 
					<option value="0" <?php print (@$ops['cgfalpha1'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['cgfalpha1'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['cgfalpha1'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['cgfalpha1'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['cgfalpha1'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['cgfalpha1'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['cgfalpha1'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['cgfalpha1'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['cgfalpha1'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['cgfalpha1'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['cgfalpha1'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Bar BG end gradient color'); ?></td>
			<td>
				<input type="text" name="settings[cgfbackgroundColor1]" class="color {hash:true,caps:false}" value="<?php print @$ops['cgfbackgroundColor1']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Bar BG end gradient alpha'); ?></td>
			<td>
				<select name="settings[cgfalpha]"> 
					<option value="0" <?php print (@$ops['cgfalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['cgfalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['cgfalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['cgfalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['cgfalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['cgfalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['cgfalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['cgfalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['cgfalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['cgfalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['cgfalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Bar corner radius'); ?></td>
			<td>
				<input type="text" name="settings[fillcornerRadius1]" value="<?php print @$ops['fillcornerRadius1']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Next Previous Buttons color'); ?></td>
			<td>
				<input type="text" name="settings[cgbbackgroundColor]" class="color {hash:true,caps:false}" value="<?php print @$ops['cgbbackgroundColor']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Next Previous Up Buttons color alpha'); ?></td>
			<td>
				<select name="settings[cgbalpha]"> 
					<option value="0" <?php print (@$ops['cgbalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['cgbalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['cgbalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['cgbalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['cgbalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['cgbalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['cgbalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['cgbalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['cgbalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['cgbalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['cgbalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Next Previous Buttons color Over border color'); ?></td>
			<td>
				<input type="text" name="settings[overcgbbackgroundColor]" class="color {hash:true,caps:false}" value="<?php print @$ops['overcgbbackgroundColor']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Next Previous Buttons Over alpha'); ?></td>
			<td>
				<select name="settings[overcgbalpha]"> 
					<option value="0" <?php print (@$ops['overcgbalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['overcgbalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['overcgbalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['overcgbalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['overcgbalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['overcgbalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['overcgbalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['overcgbalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['overcgbalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['overcgbalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['overcgbalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Next Previous Buttons Down color'); ?></td>
			<td>
				<input type="text" name="settings[downcgbbackgroundColor]" class="color {hash:true,caps:false}" value="<?php print @$ops['downcgbbackgroundColor']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Next Previous Buttons Down alpha'); ?></td>
			<td>
				<select name="settings[downcgbalpha]"> 
					<option value="0" <?php print (@$ops['downcgbalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['downcgbalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['downcgbalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['downcgbalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['downcgbalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['downcgbalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['downcgbalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['downcgbalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['downcgbalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['downcgbalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['downcgbalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Next Previous Buttons up color'); ?></td>
			<td>
				<input type="text" name="settings[cgup]" class="color {hash:true,caps:false}" value="<?php print @$ops['cgup']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Next Previous Arrow Buttons alpha'); ?></td>
			<td>
				<select name="settings[buttoncgbalpha]"> 
					<option value="0" <?php print (@$ops['buttoncgbalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['buttoncgbalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['buttoncgbalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['buttoncgbalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['buttoncgbalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['buttoncgbalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['buttoncgbalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['buttoncgbalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['buttoncgbalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['buttoncgbalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['buttoncgbalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Buttons over color'); ?></td>
			<td>
				<input type="text" name="settings[cgover]" class="color {hash:true,caps:false}" value="<?php print @$ops['cgover']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Next Previous Arrow Buttons Over alpha'); ?></td>
			<td>
				<select name="settings[buttonovercgbalpha]"> 
					<option value="0" <?php print (@$ops['buttonovercgbalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['buttonovercgbalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['buttonovercgbalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['buttonovercgbalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['buttonovercgbalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['buttonovercgbalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['buttonovercgbalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['buttonovercgbalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['buttonovercgbalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['buttonovercgbalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['buttonovercgbalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Next Previous Buttons Arrow down color'); ?></td>
			<td>
				<input type="text" name="settings[cgdown]" class="color {hash:true,caps:false}" value="<?php print @$ops['cgdown']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Next Previous Arrow Buttons Down alpha'); ?></td>
			<td>
				<select name="settings[buttondowncgbalpha]"> 
					<option value="0" <?php print (@$ops['buttondowncgbalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['buttondowncgbalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['buttondowncgbalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['buttondowncgbalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['buttondowncgbalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['buttondowncgbalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['buttondowncgbalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['buttondowncgbalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['buttondowncgbalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['buttondowncgbalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['buttondowncgbalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Image BG up color'); ?></td>
			<td>
				<input type="text" name="settings[ccbup]" class="color {hash:true,caps:false}" value="<?php print @$ops['ccbup']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Image BG alpha'); ?></td>
			<td>
				<select name="settings[imgbuttonalpha]"> 
					<option value="0" <?php print (@$ops['imgbuttonalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['imgbuttonalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['imgbuttonalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['imgbuttonalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['imgbuttonalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['imgbuttonalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['imgbuttonalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['imgbuttonalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['imgbuttonalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['imgbuttonalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['buttondowncgbalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Image BG over color'); ?></td>
			<td>
				<input type="text" name="settings[ccbgover]" class="color {hash:true,caps:false}" value="<?php print @$ops['ccbgover']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Image Over alpha'); ?></td>
			<td>
				<select name="settings[imageovercgbalpha]"> 
					<option value="0" <?php print (@$ops['imageovercgbalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['imageovercgbalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['imageovercgbalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['imageovercgbalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['imageovercgbalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['imageovercgbalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['imageovercgbalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['imageovercgbalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['imageovercgbalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['imageovercgbalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['imageovercgbalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Image BG down color'); ?></td>
			<td>
				<input type="text" name="settings[ccbgdown]" class="color {hash:true,caps:false}" value="<?php print @$ops['ccbgdown']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Image Down alpha'); ?></td>
			<td>
				<select name="settings[imagedowncgbalpha]"> 
					<option value="0" <?php print (@$ops['imagedowncgbalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['imagedowncgbalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['imagedowncgbalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['imagedowncgbalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['imagedowncgbalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['imagedowncgbalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['imagedowncgbalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['imagedowncgbalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['imagedowncgbalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['imagedowncgbalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['imagedowncgbalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>


		<tr>
			<td><?php _e('Image Selected color'); ?></td>
			<td>
				<input type="text" name="settings[imageselectedcolor]" class="color {hash:true,caps:false}" value="<?php print @$ops['imageselectedcolor']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Selected Image alpha'); ?></td>
			<td>
				<select name="settings[selectedimagebalpha]"> 
					<option value="0" <?php print (@$ops['selectedimagebalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['selectedimagebalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['selectedimagebalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['selectedimagebalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['selectedimagebalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['selectedimagebalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['selectedimagebalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['selectedimagebalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['selectedimagebalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['selectedimagebalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['selectedimagebalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		
		<tr>
			<td><?php _e('Number up color'); ?></td>
			<td>
				<input type="text" name="settings[cclup]" class="color {hash:true,caps:false}" value="<?php print @$ops['cclup']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Number up alpha'); ?></td>
			<td>
				<select name="settings[lcgbalpha]"> 
					<option value="0" <?php print (@$ops['lcgbalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['lcgbalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['lcgbalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['lcgbalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['lcgbalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['lcgbalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['lcgbalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['lcgbalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['lcgbalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['lcgbalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['lcgbalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Number over color'); ?></td>
			<td>
				<input type="text" name="settings[cclgover]" class="color {hash:true,caps:false}" value="<?php print @$ops['cclgover']; ?>" />
			</td>
		</tr>


	<tr>
			<td><?php _e('Number Over alpha'); ?></td>
			<td>
				<select name="settings[lableovercgbalpha]"> 
					<option value="0" <?php print (@$ops['lableovercgbalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['lableovercgbalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['lableovercgbalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['lableovercgbalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['lableovercgbalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['lableovercgbalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['lableovercgbalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['lableovercgbalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['lableovercgbalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['lableovercgbalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['lableovercgbalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Number down color'); ?></td>
			<td>
				<input type="text" name="settings[cclgdown]" class="color {hash:true,caps:false}" value="<?php print @$ops['cclgdown']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Number Down alpha'); ?></td>
			<td>
				<select name="settings[cclgalpha]"> 
					<option value="0" <?php print (@$ops['cclgalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['cclgalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['cclgalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['cclgalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['cclgalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['cclgalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['cclgalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['cclgalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['cclgalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['cclgalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['cclgalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Number Selected color'); ?></td>
			<td>
				<input type="text" name="settings[labelimageselectedcolor]" class="color {hash:true,caps:false}" value="<?php print @$ops['labelimageselectedcolor']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Selected Number alpha'); ?></td>
			<td>
				<select name="settings[lableselectedimagebalpha]"> 
					<option value="0" <?php print (@$ops['lableselectedimagebalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['lableselectedimagebalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['lableselectedimagebalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['lableselectedimagebalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['lableselectedimagebalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['lableselectedimagebalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['lableselectedimagebalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['lableselectedimagebalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['lableselectedimagebalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['lableselectedimagebalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['lableselectedimagebalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Thumbs tooltip Border color'); ?></td>
			<td>
				<input type="text" name="settings[cttbackgroundcolor]" class="color {hash:true,caps:false}" value="<?php print @$ops['cttbackgroundcolor']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Tooltip Border alpha'); ?></td>
			<td>
				<select name="settings[cttbackgroundalpha]"> 
					<option value="0" <?php print (@$ops['cttbackgroundalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['cttbackgroundalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['cttbackgroundalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['cttbackgroundalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['cttbackgroundalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['cttbackgroundalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['cttbackgroundalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['cttbackgroundalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['cttbackgroundalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['cttbackgroundalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['cttbackgroundalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Tooltip BG color'); ?></td>
			<td>
				<input type="text" name="settings[fillcttbackgroundcolor]" class="color {hash:true,caps:false}" value="<?php print @$ops['fillcttbackgroundcolor']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Tooltip BG alpha'); ?></td>
			<td>
				<select name="settings[fillcttbackgroundalpha]"> 
					<option value="0" <?php print (@$ops['fillcttbackgroundalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['fillcttbackgroundalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['fillcttbackgroundalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['fillcttbackgroundalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['fillcttbackgroundalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['fillcttbackgroundalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['fillcttbackgroundalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['fillcttbackgroundalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['fillcttbackgroundalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['fillcttbackgroundalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['fillcttbackgroundalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Tooltip text color'); ?></td>
			<td>
				<input type="text" name="settings[ctttextColor]" class="color {hash:true,caps:false}" value="<?php print @$ops['ctttextColor']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Tooltip BG alpha'); ?></td>
			<td>
				<select name="settings[filllabelcttbackgroundalpha]"> 
					<option value="0" <?php print (@$ops['filllabelcttbackgroundalpha'] == 0) ? 'selected' : ''; ?>>0</option>
					<option value="0.1" <?php print (@$ops['filllabelcttbackgroundalpha'] == 0.1) ? 'selected' : ''; ?>>0.1</option>
					<option value="0.2" <?php print (@$ops['filllabelcttbackgroundalpha'] == 0.2) ? 'selected' : ''; ?>>0.2</option>
					<option value="0.3" <?php print (@$ops['filllabelcttbackgroundalpha'] == 0.3) ? 'selected' : ''; ?>>0.3</option>
					<option value="0.4" <?php print (@$ops['filllabelcttbackgroundalpha'] == 0.4) ? 'selected' : ''; ?>>0.4</option>
					<option value="0.5" <?php print (@$ops['filllabelcttbackgroundalpha'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
					<option value="0.6" <?php print (@$ops['filllabelcttbackgroundalpha'] == 0.6) ? 'selected' : ''; ?>>0.6</option>
					<option value="0.7" <?php print (@$ops['filllabelcttbackgroundalpha'] == 0.7) ? 'selected' : ''; ?>>0.7</option>
					<option value="0.8" <?php print (@$ops['filllabelcttbackgroundalpha'] == 0.8) ? 'selected' : ''; ?>>0.8</option>
					<option value="0.9" <?php print (@$ops['filllabelcttbackgroundalpha'] == 0.9) ? 'selected' : ''; ?>>0.9</option>
					<option value="1" <?php print (@$ops['filllabelcttbackgroundalpha'] == 1) ? 'selected' : ''; ?>>1</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Bar Position'); ?></td>
			<td>
				<input type="radio" name="settings[cposition]" value="top" <?php print (@$ops['cposition'] == 'top') ? 'checked' : ''; ?>><span><?php _e('top'); ?></span>
				<input type="radio" name="settings[cposition]" value="bottom" <?php print (@$ops['cposition'] == 'bottom') ? 'checked' : ''; ?>><span><?php _e('bottom'); ?></span>
			</td>
		</tr>

		<tr>
			<td><?php _e('Bar Display'); ?></td>
			<td>
				<input type="radio" name="settings[cDisplay]" value="show" <?php print (@$ops['cDisplay'] == 'show') ? 'checked' : ''; ?>><span><?php _e('Show'); ?></span>
				<input type="radio" name="settings[cDisplay]" value="autoHide" <?php print (@$ops['cDisplay'] == 'autoHide') ? 'checked' : ''; ?>><span><?php _e('AutoHide'); ?></span>
				<input type="radio" name="settings[cDisplay]" value="hide" <?php print (@$ops['cDisplay'] == 'hide') ? 'checked' : ''; ?>><span><?php _e('Hide'); ?></span>
			</td>
		</tr>

		<tr>
			<td><?php _e('Transition Type'); ?></td>
			<td>
				<select name="settings[effectType]">
					<option value="1" <?php print (@$ops['effectType'] == '1') ? 'selected' : ''; ?>><?php _e('Fades in');?></option>

					<option value="2" <?php print (@$ops['effectType'] == '2') ? 'selected' : ''; ?>><?php _e('Zooms out');?></option>

					<option value="3" <?php print (@$ops['effectType'] == '3') ? 'selected' : ''; ?>><?php _e('Elastic Zoom In');?></option>

					<option value="4" <?php print (@$ops['effectType'] == '4') ? 'selected' : ''; ?>><?php _e('Blur Zoom Out');?></option>

					<option value="5" <?php print (@$ops['effectType'] == '5') ? 'selected' : ''; ?>><?php _e('Elastic Slide');?></option>.

					<option value="6" <?php print (@$ops['effectType'] == '6') ? 'selected' : ''; ?>><?php _e('Squares');?></option>.

					<option value="7" <?php print (@$ops['effectType'] == '7') ? 'selected' : ''; ?>><?php _e('Triple Squares');?></option>

					<option value="8" <?php print (@$ops['effectType'] == '8') ? 'selected' : ''; ?>><?php _e('Horizontal Stripes');?></option>

					<option value="9" <?php print (@$ops['effectType'] == '9') ? 'selected' : ''; ?>><?php _e('Vertical Stripes');?></option>

					<option value="10" <?php print (@$ops['effectType'] == '10') ? 'selected' : ''; ?>><?php _e('Waves');?></option>

					<option value="11" <?php print (@$ops['effectType'] == '11') ? 'selected' : ''; ?>><?php _e('Scales Bars');?></option>

					<option value="12" <?php print (@$ops['effectType'] == '12') ? 'selected' : ''; ?>><?php _e('Bounce Slide');?></option>

					<option value="13" <?php print (@$ops['effectType'] == '13') ? 'selected' : ''; ?>><?php _e('Iris');?></option>

					<option value="14" <?php print (@$ops['effectType'] == '14') ? 'selected' : ''; ?>><?php _e('Alpha Mask');?></option>

					<option value="15" <?php print (@$ops['effectType'] == '15') ? 'selected' : ''; ?>><?php _e('Intersected Bars');?></option>

				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Effect Delay'); ?></td>
			<td>
				<input type="text" name="settings[effectDelay]" value="<?php print @$ops['effectDelay']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Bar Display'); ?></td>
			<td>
				<input type="radio" name="settings[closingEffect]" value="default" <?php print (@$ops['closingEffect'] == 'default') ? 'checked' : ''; ?>><span><?php _e('default'); ?></span>
				<input type="radio" name="settings[closingEffect]" value="fade" <?php print (@$ops['closingEffect'] == 'fade') ? 'checked' : ''; ?>><span><?php _e('Fade'); ?></span>
				
			</td>
		</tr>

		<tr>
			<td><?php _e('Description Transition Type'); ?></td>
			<td>
				<select name="settings[descEffect]">
					<option value="No effect" <?php print (@$ops['descEffect'] == 'No effect') ? 'selected' : ''; ?>><?php _e('No effect');?></option>

					<option value="Linear Fade" <?php print (@$ops['descEffect'] == 'Linear Fade') ? 'selected' : ''; ?>><?php _e('Linear Fade');?></option>

					<option value="Linear Drop" <?php print (@$ops['descEffect'] == 'Linear Drop') ? 'selected' : ''; ?>><?php _e('Linear Drop');?></option>

					<option value="Linear Elastic Drop" <?php print (@$ops['descEffect'] == 'Linear Elastic Drop') ? 'selected' : ''; ?>><?php _e('Linear Elastic Drop');?></option>

					<option value="Elastic Slide" <?php print (@$ops['descEffect'] == 'Elastic Slide') ? 'selected' : ''; ?>><?php _e('Elastic Slide');?></option>.

					<option value="Linear Pop" <?php print (@$ops['descEffect'] == 'Linear Pop') ? 'selected' : ''; ?>><?php _e('Linear Pop');?></option>.

					<option value="Linear Elastic Pop" <?php print (@$ops['descEffect'] == 'Linear Elastic Pop') ? 'selected' : ''; ?>><?php _e('Linear Elastic Pop');?></option>

					<option value="Random Elastic Drop" <?php print (@$ops['descEffect'] == 'Random Elastic Drop') ? 'selected' : ''; ?>><?php _e('Random Elastic Drop');?></option>

					<option value="Random Elastic Pop" <?php print (@$ops['descEffect'] == 'Random Elastic Pop') ? 'selected' : ''; ?>><?php _e('Random Elastic Pop');?></option>

					

				</select>
			</td>
		</tr>

		<tr>
			<td><?php _e('Display time'); ?></td>
			<td>
				<input type="text" name="settings[displayTime]" value="<?php print @$ops['displayTime']; ?>" />
			</td>
		</tr>

		<tr>
			<td><?php _e('Autoplay'); ?></td>
			<td>
				<input type="radio" name="settings[autoplay]" value="yes" <?php print (@$ops['autoplay'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('yes'); ?></span>
				<input type="radio" name="settings[autoplay]" value="no" <?php print (@$ops['autoplay'] == 'no') ? 'checked' : ''; ?>><span><?php _e('no'); ?></span>
			</td>
		</tr>

		<tr>
			<td><?php _e('Show Random Slides'); ?></td>
			<td>
				<input type="radio" name="settings[random_slide]" value="yes" <?php print (@$ops['random_slide'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('yes'); ?></span>
				<input type="radio" name="settings[random_slide]" value="no" <?php print (@$ops['random_slide'] == 'no') ? 'checked' : ''; ?>><span><?php _e('no'); ?></span>
			</td>
		</tr>

		<tr>
			<td><?php _e('Full image scale'); ?></td>
			<td>
				<input type="radio" name="settings[fullscale]" value="yes" <?php print (@$ops['fullscale'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('yes'); ?></span>
				<input type="radio" name="settings[fullscale]" value="no" <?php print (@$ops['fullscale'] == 'no') ? 'checked' : ''; ?>><span><?php _e('no'); ?></span>
			</td>
		</tr>

		<tr>
			<td><?php _e('Target'); ?></td>
			<td>
				<input type="radio" name="settings[windowOpen]" value="current" <?php print (@$ops['windowOpen'] == 'current') ? 'checked' : ''; ?>><span><?php _e('Same window'); ?></span>
				<input type="radio" name="settings[windowOpen]" value="new" <?php print (@$ops['windowOpen'] == 'new') ? 'checked' : ''; ?>><span><?php _e('New'); ?></span>
			</td>
		</tr>


		<tr>
			<td><?php _e('Show Description'); ?></td>
			<td>
				<input type="radio" name="settings[show_desc]" value="yes" <?php print (@$ops['show_desc'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('yes'); ?></span>
				<input type="radio" name="settings[show_desc]" value="no" <?php print (@$ops['show_desc'] == 'no') ? 'checked' : ''; ?>><span><?php _e('no'); ?></span>
			</td>
		</tr>


		<tr>
			<td><?php _e('Show Titles'); ?></td>
			<td>
				<input type="radio" name="settings[show_title]" value="yes" <?php print (@$ops['show_title'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('yes'); ?></span>
				<input type="radio" name="settings[show_title]" value="no" <?php print (@$ops['show_title'] == 'no') ? 'checked' : ''; ?>><span><?php _e('no'); ?></span>
			</td>
		</tr>

<tr>
			<td><?php _e('Use Url'); ?></td>
			<td>
				<input type="radio" name="settings[use_link]" value="yes" <?php print (@$ops['use_link'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('yes'); ?></span>
				<input type="radio" name="settings[use_link]" value="no" <?php print (@$ops['use_link'] == 'no') ? 'checked' : ''; ?>><span><?php _e('no'); ?></span>
			</td>
		</tr>

<!-- Specific parameters END -->


<tr>
			<td><?php _e('wmode'); ?></td>
			<td>
				<select name="settings[wmode]">
					<option value="opaque" <?php print (@$ops['wmode'] == 'opaque') ? 'selected' : ''; ?>><?php _e('opaque');?></option>

					<option value="transparent" <?php print (@$ops['wmode'] == 'transparent') ? 'selected' : ''; ?>><?php _e('transparent');?></option>

					<option value="window" <?php print (@$ops['wmode'] == 'window') ? 'selected' : ''; ?>><?php _e('window');?></option>

					
				</select>
			</td>
		</tr>
		</table>
	<p><button type="submit" class="button-primary"><?php _e('Save Config'); ?></button></p>
	</form>
</div>