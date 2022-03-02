<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  
  <!-- Llamar a los complementos javascript-->
  <script src="<?php echo base_url(); ?>static/table-exports/exportar_html_excel/jquery-1.12.4.min.js"></script>
  <script src="<?php echo base_url(); ?>static/table-exports/exportar_html_excel/FileSaver.min.js"></script>
  <script src="<?php echo base_url(); ?>static/table-exports/exportar_html_excel/Blob.min.js"></script>
  <script src="<?php echo base_url(); ?>static/table-exports/exportar_html_excel/xls.core.min.js"></script>
  <script src="<?php echo base_url(); ?>static/table-exports/exportar_html_excel/dist/js/tableexport.js"></script>
  <script>
  $("table").tableExport({

    formats: ["xlsx", "txt", "csv"], //Tipo de archivos a exportar ("xlsx","txt", "csv", "xls")
    position: 'bottom', // Posicion que se muestran los botones puedes ser: (top, bottom)
    bootstrap: false, //Usar lo estilos de css de bootstrap para los botones (true, false)
    fileName: "Reportes", //Nombre del archivo 
  });
  </script>


  <script src="<?php echo base_url(); ?>static/admin-style/assets/vendor/apexcharts/apexcharts.min.js"></script>
   <script src="<?php echo base_url(); ?>static/admin-style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="<?php echo base_url(); ?>static/admin-style/assets/vendor/chart.js/chart.min.js"></script>
   <script src="<?php echo base_url(); ?>static/admin-style/assets/vendor/echarts/echarts.min.js"></script>
   <script src="<?php echo base_url(); ?>static/admin-style/assets/vendor/quill/quill.min.js"></script>
   <script src="<?php echo base_url(); ?>static/admin-style/assets/vendor/simple-datatables/simple-datatables.js"></script>
   <script src="<?php echo base_url(); ?>static/admin-style/assets/vendor/tinymce/tinymce.min.js"></script>
   <script src="<?php echo base_url(); ?>static/admin-style/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
   <script src="<?php echo base_url(); ?>static/admin-style/assets/js/main.js"></script>

</body>

</html>