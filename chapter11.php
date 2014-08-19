<html>
	<head>
		<?php require('parts/links.php'); ?>
		<?php
			$chapter = 11;
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
					<h3 class="header">Chapter 11 XML</h3>
					
					<div class="ui list">
						XML, the Extensible Markup Language, is a standardized data format. It looks a little
						like HTML, with tags (&lt;example&gt;like this&lt;/example&gt;) and entities (&amp;amp;). Unlike
						HTML, however, XML is designed to be easy to programmatically parse, and there are
						rules for what you can and cannot do in an XML document.  <br>


						<div class="item">
							<div class="header">Guide to XML</div>
							Most XML consists of elements (like HTML tags), entities, and regular data. <br>
							<code>
								&lt;book isbn="1-56592-610-2"&gt; <br>
								&lt;title&gt; <br>Programming PHP&lt;/title&gt; <br>
								&lt;authors&gt; <br>
								&lt;author&gt; <br>Rasmus Lerdorf&lt;/author&gt; <br>
								&lt;author&gt; <br>Kevin Tatroe&lt;/author&gt; <br>
								&lt;author&gt; <br>Peter MacIntyre&lt;/author&gt; <br>
								&lt;/authors&gt; <br>
								&lt;/book&gt; <br>
							</code>
							XML also requires that the document begin with a processing instruction that identifies
							the version of XML being used (and possibly other things, such as the text encoding
							used).  <br>
							The final requirement of a well-formed XML document is that there be only one element
							at the top level of the file. <br>
							<code>
								&lt;?xml version="1.0" ?&gt; <br>
								&lt;library&gt; <br>
								&lt;title&gt; <br>Programming PHP&lt;/title&gt; <br>
								&lt;title&gt; <br>Programming Perl&lt;/title&gt; <br>
								&lt;title&gt; <br>Programming C#&lt;/title&gt; <br>
								&lt;/library&gt; <br>

							</code>
							<hr>
							XML documents generally are not completely ad hoc. The specific tags, attributes, and
							entities in an XML document, and the rules governing how they nest, comprise the
							structure of the document. There are two ways to write down this structure: the docu-
							ment type definition (DTD) and the schema. DTDs and schemas are used to validate
							documents—that is, to ensure that they follow the rules for their type of document. <br>

						</div>


						<div class="item">
							<div class="header">Generating XML</div>
							Generating an XML document from a PHP script is simple. Simply change the MIME
							type of the document, using the header() function, to "text/xml". To emit the
							&lt;?xml ... ?&gt; declaration without it being interpreted as a malformed PHP tag, simply
							echo the line from within PHP code <br>
							<code>
								echo '&lt;?xml version="1.0" encoding="ISO-8859-1" ?&gt;'; <br>
							</code>
							<hr>
							Just as there are
							no special functions for generating HTML from PHP, there are no special functions for
							generating XML. You just echo it! <br>
							<code>
								&lt;?php
								header('Content-Type: text/xml');
								echo "xml version=\"1.0\" encoding=\'ISO-8859-1\" ?&gt; <br>";
								?&gt; <br>
								&lt;!DOCTYPE rss PUBLIC '-//Netscape Communications//DTD RSS 0.91//EN"
								"http://my.netscape.com/publish/formats/rss-0.91.dtd"&gt; <br>
								&lt;rss version="0.91"&gt; <br>
								&lt;channel&gt; <br>
								&lt;?php
								// news items to produce RSS for
								$items = array(
								array(
								'title' =&gt; <br> "Man Bites Dog",
								'link' =&gt; <br> "http://www.example.com/dog.php",
								'desc' =&gt; <br> "Ironic turnaround!"
								),
								array(
								'title' =&gt; <br> "Medical Breakthrough!",
								'link' =&gt; <br> "http://www.example.com/doc.php",
								'desc' =&gt; <br> "Doctors announced a cure for me."
								)
								);
								foreach($items as $item) {
								echo "&lt;item&gt; <br>\n";
								echo " &lt;title&gt; <br>{$item['title']}&lt;/title&gt; <br>\n";
								echo " &lt;link&gt; <br>{$item['link']}&lt;/link&gt; <br>\n";
								echo " &lt;description&gt; <br>{$item['desc']}&lt;/description&gt; <br>\n";
								echo " &lt;language&gt; <br>en-us&lt;/language&gt; <br>\n";
								echo "&lt;/item&gt; <br>\n\n";
								} ?&gt; <br>
								&lt;/channel&gt; <br>
								&lt;/rss&gt; <br>

							</code>



						</div>
						<div class="item">
							<div class="header">Parsing XML</div>
							Say you have a set of XML files, each containing information about a book, and you
							want to build an index showing the document title and its author for the collection.
							You need to parse the XML files to recognize the title and author elements and their contents. 
							You could do this by hand with regular expressions and string functions such
							as strtok(), but it’s a lot more complex than it seems. <hr>
							PHP includes three XML parsers: one event-driven library based on the expat C library,
							one DOM-based library, and one for parsing simple XML documents named, appro-
							priately, SimpleXML. <br>
							<em>Element Handlers</em> <br>
							When the parser encounters the beginning or end of an element, it calls the start and
							end element handlers. You set the handlers through the xml_set_element_handler()
							function <br>
							<code>xml_set_element_handler(parser, start_element, end_element); </code> <br>
							The start_element and end_element parameters are the names of the handler functions.
							The start element handler is called when the XML parser encounters the beginning of
							an element: <br>
							<code>startElementHandler(parser, element, &attributes);</code><br>
							<em>Character Data Handler</em><br>
							All of the text between elements (character data, or CDATA in XML terminology) is
							handled by the character data handler. The handler you set with the xml_set_charac
							ter_data_handler() function is called after each block of character data <br>
							<code>xml_set_character_data_handler(parser, handler);</code><br>
							Here’s a simple character data handler that simply prints the data: <br>
							<code>
								function characterData($parser, $data) <br>
								{ <br>
								echo $data; <br>
								} <br>
							</code>

							<em>Entity Handlers</em><br>
							Entities in XML are placeholders. XML provides five standard entities (<?php echo htmlentities("&amp;, &gt;,
							&lt;, &quot;, and &apos; "); ?>), but XML documents can define their own entities. Most
							entity definitions do not trigger events, and the XML parser expands most entities in
							documents before calling the other handlers. <br>
							<strong>An external entity </strong> is one whose replacement text is identified by a filename or
							URL rather than explicitly given in the XML file. <br>
							<strong>An unparsed entity </strong>must be accompanied by a notation declaration, and while you can
							define handlers for declarations of unparsed entities and notations, occurrences of un-
							parsed entities are deleted from the text before the character data handler is called. <br>
							<em>.Default Handler </em> <br>
							For any other event, such as the XML declaration and the XML document type, the
							default handler is called. To set the default handler, call the xml_set_default_han
							dler() function <br>
							<code>
							xml_set_default_handler(parser, handler); <br>
							</code>


							<em>Using the Parser</em><br>
							To use the XML parser, create a parser with xml_parser_create(), set handlers and
							options on the parser, and then hand chunks of data to the parser with the
							xml_parse() function until either the data runs out or the parser returns an error.
							Once the processing is complete, the parser is freed by calling xml_parser_free(). <br>





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
