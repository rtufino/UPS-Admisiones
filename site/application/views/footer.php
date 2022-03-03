
    </div>
    <footer>
            <div class="text-muted">
                Desarrollado por el grupo de Inteligencia Artificial de la Carrera de Computación
                <br/>Version 1.2 - UPS © 2022
            </div>
        </footer>
    
                    <script>
                        function Motivo() {
                        var mt1 = document.getElementById("inMotivo").value;
                            if (mt1 === 'Otro-motivo') {
                                document.getElementById("otroMotivo").style.display = "block";
                                document.getElementById("otroMotivo").setAttribute("style", "margin-top:0.5rem")
                                //$("#otroMotivo").show();
                                }
                            else{
                                document.getElementById("otroMotivo").style.display = "none";
                                //$("#otroMotivo").hide();
                            }
                        }

                        function Motivo2() {
                        var mt2 = document.getElementById("inMotivo2").value;
                            if (mt2 === 'Otro-motivo') {
                                document.getElementById("otroMotivo2").style.display = "block";
                                document.getElementById("otroMotivo2").setAttribute("style", "margin-top:0.5rem")
                                //$("#otroMotivo").show();
                                }
                            else{
                                document.getElementById("otroMotivo2").style.display = "none";
                                //$("#otroMotivo").hide();
                            }
                        }


                        
                    </script>
                    <script>
                      function handleChange(r11) {
                        if (r11.value == 1){
                            console.log("entra")
                            document.getElementById("block-op1").style.display = "block";
                            document.getElementById("block-op1").setAttribute("style", "margin-top:0.5rem")
                        }else{
                            console.log("no entra")
                            document.getElementById("block-op1").style.display = "none";
                        }

                        }
                    </script>

                     <script>
                      function radio1(r1) {
                        if (r1.value == 1){
                            
                            document.getElementById("inMotivo").removeAttribute("disabled"); 
                            
                        }else{
    
                            document.getElementById("inMotivo").setAttribute("value", "");
                            document.getElementById("inMotivo").disabled=true;
                        }

                        }
                    </script>

                    <script>
                      function radio2(r2) {
                        if (r2.value == 1){
                            document.getElementById("inMotivo2").setAttribute("value", "");
                            document.getElementById("inMotivo2").disabled=true;
                                                        
                        }else{
                
                            document.getElementById("inMotivo2").removeAttribute("disabled"); 
                        }

                        }
                    </script>
         
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>static/script.js"></script>
</body>

</html>
