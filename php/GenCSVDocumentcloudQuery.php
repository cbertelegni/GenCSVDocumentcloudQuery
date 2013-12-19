<?php 
class GenCSVDocumentcloud{
	/*
	get data of documentcloud from a query
	*/
	var $query;
	var $per_page; // default 100
	var $page = 0;

	public function __construct($q, $x_page = 1000){
		$this->query = $q;
		$this->per_page = $x_page;
	}

	private function get_data(){ // get data from documentcloud
		$url = "https://www.documentcloud.org/api/search.json?q=$this->query&per_page=$this->per_page&page=$this->page";
		$data = file_get_contents($url);
		$data = json_decode($data);
		return $data;
	}

	private function print_data($_data, $_fp){
		foreach ($_data as $d) {
			fputcsv($_fp, array( $d->title, $d->canonical_url, $d->id, $d->description, $d->pages)); // print values in csv
		}
	}

	public function main(){ // main function, create csv 
		$fp = fopen("DC_$this->query.csv", 'w'); // open csv

		fputcsv($fp, array( "document_title", "document_url", "document_id", "Description", "Pages" )); // set headers csv

		do { // each page
			$this->page++;
			$json = $this->get_data();
			$total = $json->total; 
			$pages = $total / $this->per_page;

			print "Page: $this->page";
			print "\n";
			$this->print_data($json->documents, $fp);
		} while ( $this->page <= $pages);

		fclose($fp); // close csv

	}

}

// usage
/*

$query = "projectid:7607-poder-legislativo";
$dc = new GenCSVDocumentcloud($query);
$dc->main();
*/
// $ php ./GenCSVDocumentcloud.php