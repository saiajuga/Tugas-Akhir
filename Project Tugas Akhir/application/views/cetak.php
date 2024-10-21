<?php $dokumen = $this->input->get('dokumen'); ?>
<embed
    type="application/pdf"
    src="<?php echo base_url('assets/backend/file/'.$dokumen); ?>"
    id="pdfDocument"
    width="100%"
    height="100%" />

<script>
    function printDocument(documentId) {
    var doc = document.getElementById(documentId);

    //Wait until PDF is ready to print    
    if (typeof doc.print === 'undefined') {    
        setTimeout(function(){printDocument(documentId);}, 1000);
    } else {
        doc.print();
    }
}
</script>