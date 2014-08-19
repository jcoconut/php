<html>
	<head>
		<?php require('parts/links.php'); ?>
		<?php
			$chapter = 10;
		?>
		<title>
			PHP Chapter <?php echo $chapter; ?>
		</title>
		<style>
			em{
				color:red;
			}
			code{
				color:green;
			}
		</style>
	</head>
	<body>

		<div class="ui segment tertiary inverted basic" style="margin:0px;">
			<h2 class="ui header">
			  <i class="home circular blue inverted icon"></i>
			  <div class="content">
			    PHP Testing
			    <div class="sub header">This is Jay's notes,testing of PHP,exercises and on..</div>
			  </div>
			</h2>
		</div>
		<div class="ui segment center aligned basic"  style="margin:0px;">
			Chapters<br>
			<?php require('parts/chapterstab.php'); ?>	
		</div>
		
		
		<div class="ui page grid">
			<div class="sixteen wide column">

				<div class="ui segment">
					<h3 class="header">Chapter 10 PDF</h3>
					
					<div class="ui list">
						Text

						<div class="item">
							<div class="header">Coordinates</div>
							The origin (0,0) in a PDF document with the FPDF library is in the top-left corner of
							the defined page. All of the measurements are specified in points, millimeters, inches,
							or centimeters. <br>


						</div>
						<div class="item">
							<div class="header">Text Attributes</div>
							There are three common ways to alter the appearance of text: bold, underline, and
							italics. You have already seen the SetFont() method of this library, but there are other
							features of that method, and this is one of them. <br>
							<code>

								require("../fpdf/fpdf.php"); <br>
								$pdf = new FPDF(); <br>
								$pdf->addPage(); <br>
								$pdf->setFont("Arial", '', 12); <br>
								$pdf->cell(0, 5, "Regular normal Arial Text here, size 12", 0, 1, 'L'); <br>
								$pdf->ln(); <br>
								$pdf->setFont("Arial", 'IBU', 20); <br>
								$pdf->cell(0, 15, "This is Bold, Underlined, Italicised Text size 20", 0, 0, 'L'); <br>
								$pdf->ln(); <br>
								$pdf->setFont("Times", 'IU', 15); <br>
								$pdf->cell(0, 5, "This is Underlined Italicised 15pt Times", 0, 0, 'L'); <br>
								$pdf->output(); <br>
							</code>


						</div>
						<div class="item">
							<div class="header">Page Headers, Footers, and Class Extension</div>
							So far we have only looked at what can be put out on the PDF page in small quantities.
							This was done to show you the variety of what can be done within a controlled environment. Now we need to expand what this library can do. Remember that this library
							actually is just a class definition provided for your use and extension. The second part
							of that statement is what we will look at now—the extension of the class. Since FPDF
							is indeed a class definition, all we have to do to extend it is to use the object command
							that is native to PHP <br>



						</div>
						<div class="item">
							<div class="header">Images and Links</div>
							The FPDF library can also handle image insertion and control links within the PDF
							document or externally to outside web addresses. Let’s first look at how FPDF allows
							you to enter graphics into your document. <br>
							<code>
							function header() <br>
							{ <br>
							global $title; <br>
							$this->setFont("Times", '', 12); <br>
							$this->setDrawColor(0, 0, 180); <br>
							$this->setFillColor(230, 0, 230); <br>
							$this->setTextColor(0, 0, 255); <br>
							$this->setLineWidth(0.5); <br>
							$width = $this->getStringWidth($title) + 120; <br>

							$this->image("php-tiny.jpg", 10, 10.5, 15, 8.5); <br>
							$this->cell($width, 9, $title, 1, 1, 'C'); <br>
							$this->ln(10); <br>
							}
							</code>

						</div>
						<div class="item">
							<div class="header">Tables and Data</div>
							

						</div>
						
						
					</div>	
				</div>
			</div>


		</div>
		<div class="ui segment secondary tertiary center aligned">
					
			<div class="ui icon header black">
				<i class="circular question inverted icon"></i>	&copy; Jay 2014
				<div class="sub header">Have any questions? Contact Me</div>
			</div>
	
		</div>

	
	</body>




</html>
