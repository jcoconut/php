			<div class="ui connected items">
				<?php if($chapter==1):?>
						<div class="item" style="width:5.88%;border-bottom: 0.2em solid rgba(99, 99, 99, 1.2);">
						<?php else: ?>
						<div class="item" style="width:5.88%;">
					<?php endif; ?>

							<div class="content" style="margin:0px;padding:0px;">

								<a href="index.php" style="color:black;text-decoration:none;">

								<div class="name">1</div>
								</a>
								<!-- <p class="description">This.</p> -->
							</div>
						</div>
				 
				<?php for($i=2;$i<18;$i++): ?>
					<?php if($chapter==$i):?>
						<div class="item" style="width:5.88%;border-bottom: 0.2em solid rgba(99, 99, 99, 1.2);">
						<?php else: ?>
						<div class="item" style="width:5.88%;">
					<?php endif; ?>

							<div class="content" style="margin:0px;padding:0px;">

								<a href="<?php echo 'chapter'.$i; ?>" style="color:black;text-decoration:none;">

								<div class="name"><?php echo $i; ?></div>
								</a>
								<!-- <p class="description">This.</p> -->
							</div>
						</div>
				<?php endfor; ?>  
			</div>