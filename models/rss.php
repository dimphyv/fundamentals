<?php

class Rss
{

  public function __construct($title, $link="", $description="mijn blog", $languange="nl")
  {
  $this->title = $title;
  $this->link = $link;
  $this->description = $description;
  $this->languange = $languange;
  }

  function fetchRss($data){


    for ($i=0; $i < count($data) ; $i++) {
      $title = $data[0] ['titel'];
      // Instantiate a XMLWriter object:
      $xml = new XMLWriter();
      // Next open the file to which you want to write. For example, to write to /var/www/example.com/xml/output.xml, use:
      $xml->openURI('file:/rss.xml');
      // To start the document (create the XML open tag):

      $xml->startDocument('1.0', 'utf-8');
      // Set Indent to 4 spaces
      $xml->setIndent(4);

      // Create the RSS element
      $xml->startElement('rss');
          $xml->writeAttribute('version', '2.0');
            
                  // Sets channel attributes
                 $xml->startElement('channel');
             // Sets channel attributes
             $xml->writeElement('titel', $this->title);
             $xml->writeElement('link', $this->link);
             $xml->writeElement('description', $this->description);
             $xml->writeElement('language', $this->languange);
                }
                     
                      $xml->startElement('item');
                          // Sets item attributes

                         $size = count($data);
                        for ($i=0; $i < $size ; $i++) {
                          $id = $data[$i] ['message_id'];
                          $title = $data[$i] ['titel'];
                          $naam = $data[$i] ['name'];
                          $message = $data[$i] ['message'];
                          $date = $data[$i] ['date'];
                          $xml->writeElement('message_id', $id);
                          $xml->writeElement('title', $title);
                          $xml->writeElement('naam', $naam);
                          $xml->writeElement('message', $message);
                          $xml->writeElement('date', $date);
                          
}
                              // Create the enclosure element
                              $xml->startElement('enclosure');
                                  // Sets enclosure attributes
                                  $xml->writeAttribute('url', '');
                                  $xml->writeAttribute('length', '19741854');
                                  $xml->writeAttribute('type', 'video/mpeg');
                              // Closes the enclosure element
                              $xml->endElement();
                      // Closes the item element
                      $xml->endElement();
              // Closes the channel element
              $xml->endElement();
      // Closes the RSS element
      $xml->endElement();





  }

}
