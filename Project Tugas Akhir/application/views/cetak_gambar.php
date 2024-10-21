<?php 
$gambar1 = $this->input->get('gambar1');
$gambar2 = $this->input->get('gambar2');
$gambar3 = $this->input->get('gambar3');
$gambar4 = $this->input->get('gambar4'); 
?>

<div id="printableArea">
  <div>
    <img
      src="<?php echo base_url('assets/backend/file/'.$gambar1); ?>"
      class="img-responsive"
      alt="Gambar 1"
      width="100%"
      height="auto" />
  </div>
  <div>
    <img
      src="<?php echo base_url('assets/backend/file/'.$gambar2); ?>"
      class="img-responsive"
      alt="Gambar 2"
      width="100%"
      height="auto" />
  </div>
  <div>
    <img
      src="<?php echo base_url('assets/backend/file/'.$gambar3); ?>"
      class="img-responsive"
      alt="Gambar 3"
      width="100%"
      height="auto" />
  </div>
  <div>
    <img
      src="<?php echo base_url('assets/backend/file/'.$gambar4); ?>"
      class="img-responsive"
      alt="Gambar 4"
      width="100%"
      height="auto" />
  </div>
</div>

<button onclick="printImages('printableArea')">Print Images</button>

<script>
function printImages(documentId) {
    var printContents = document.getElementById(documentId).innerHTML;
    var originalContents = document.body.innerHTML;

    // Membuka jendela baru untuk mencetak
    var printWindow = window.open('', '', 'height=600,width=800');
    printWindow.document.write('<html><head><title>Print Images</title>');
    printWindow.document.write('<style>img { width: 100%; height: auto; }</style>'); // Menambahkan gaya CSS
    printWindow.document.write('</head><body >');
    printWindow.document.write(printContents);
    printWindow.document.write('</body></html>');
    
    // Menutup dokumen dan memfokuskan jendela
    printWindow.document.close();
    printWindow.focus();

    // Mencetak jendela baru
    printWindow.print();

    // Menutup jendela setelah pencetakan selesai
    printWindow.close();
}
</script>
