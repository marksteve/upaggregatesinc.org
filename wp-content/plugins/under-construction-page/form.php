<div class="wrap">

<div class="icon32" id="icon-edit-pages"></div>

<h2>Under Construction</h2>

<div id="poststuff" class="metabox-holder has-right-sidebar">

		<div id="post-body">

			<div id="post-body-content" class="form-wrap">

                <form name="post_form" method="post" action="" enctype="multipart/form-data">

				<div id="titlediv">

					<div class="form-field">

					<label for="title"><?php _e('Set Under Construction') ?></label>

						<select name="set_opt" id="set_opt">
							<option value="No" <?php echo ($set_opt=='No')?'selected=selected':'';?>>No</option>
							<option value="Yes" <?php echo ($set_opt=='Yes')?'selected=selected':'';?>>Yes</option>
						</select>
					</div>

				</div>
				<div id="titlediv">

					<div class="form-field">

					<label for="title"><?php _e('Choose Font') ?></label>

						<select name="set_font" id="set_font">
							<option value="Open+Sans" <?php echo ($set_font=='Open+Sans')?'selected=selected':'';?>>Open Sans</option>
							<option value="Roboto" <?php echo ($set_font=='Roboto')?'selected=selected':'';?>>Roboto</option>
							<option value="Oswald" <?php echo ($set_font=='Oswald')?'selected=selected':'';?>>Oswald</option>
							<option value="Droid+Sans" <?php echo ($set_font=='Droid+Sans')?'selected=selected':'';?>>Droid Sans</option>
							<option value="Lobster" <?php echo ($set_font=='Lobster')?'selected=selected':'';?>>Lobster</option>
							<option value="Inconsolata" <?php echo ($set_font=='Inconsolata')?'selected=selected':'';?>>Inconsolata</option>
							<option value="Rokkitt" <?php echo ($set_font=='Rokkitt')?'selected=selected':'';?>>Rokkitt</option>
						</select>
					</div>

				</div>
				<div id="titlediv">

					<div class="form-field">

					<label for="title"><?php _e('Set Font Size') ?></label>

						<select name="set_size" id="set_size">
							<?php for($i=14; $i<=80;$i++){?>
							<option value="<?php echo $i;?>" <?php echo ($set_size==$i)?'selected=selected':'';?>><?php echo $i;?></option>
							<?php } ?>
							
						</select>
					</div>

				</div>

                <div id="titlediv">

					<div class="form-field">

					<label for="title"><?php _e('Message') ?></label>

						<textarea name="set_msg" id="set_msg" cols="30" rows="3"><?php echo $set_msg;?></textarea>
					</div>

				</div>
				<div id="titlediv">

					<div class="form-field">

					<label for="title"><?php _e('Set Facebook URL') ?></label>

						<input type="text" name="set_fb" id="set_fb" value="<?php echo $set_fb;?>"/>
					</div>

				</div>
				<div id="titlediv">

					<div class="form-field">

					<label for="title"><?php _e('Set Twitter URL') ?></label>

						<input type="text" name="set_tweet" id="set_tweet" value="<?php echo $set_tweet;?>"/>
					</div>

				</div>

                
				

                <div style="margin-top:15px;">
				             

                <input type="submit" name="submit" value="Submit" class="button" />

                <input type="hidden" name="act" value="save" />

                </form>

			</div>

		</div>

	</div>  

</div>