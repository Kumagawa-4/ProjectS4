<?php
use Dompdf\Dompdf;

class Pdf extends CI_Controller {
    public function generer_pdf() {
        // Load the dompdf library
        require_once FCPATH . 'vendor/autoload.php';
    
        // Create an instance of Dompdf
        $dompdf = new Dompdf();
    
        // Get the value of $objectif from the POST request or another data source
        $objectif = 1;
    
        // Perform the database query with the $objectif filter
        $this->db->where('typeRegime', $objectif);
        $query = $this->db->get('regime');
        $suggestions = $query->result_array();
    
        // Pass the suggestions data to the view
        $data['suggestions'] = $suggestions;
    
        // Load the view into a variable
        $html = $this->load->view('liste_view', $data, true);
    
        // Load the HTML content into Dompdf
        $dompdf->loadHtml($html);
    
        // Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');
    
        // Render the HTML content
        $dompdf->render();
    
        // Output the generated PDF
        $dompdf->stream('document.pdf', array('Attachment' => 0));
    }
    
}
