<?php
    include "../php2/conn.php";

     //start_ort
    $sql = "SELECT * FROM haltestelle";
    $result = mysqli_query($conn, $sql);

     //ende_ort
    $sql = "SELECT * FROM haltestelle";
    $result2 = mysqli_query($conn, $sql);

?>
<div class="oberfläche">
    <div class="überschrift">
        <h2>Ticket Buchen</h2>
    </div>
    <div class="table table1">
        <div class="div_start" id="div_start">
            <div class="div_header">
                <p>Von</p>
            </div>
            <div class="text" id="p_von_div">
                <select id="von" name="von">
                        <option  value="0">Stadt auswählen</option>
                    <?php
                        while($row_halte = mysqli_fetch_array($result)){
                            $name = $row_halte["ort"];
                            $id = $row_halte["Nachname"];
                            
                    ?>
                
                        <option value="<?=$name?>" name="<?=$id?>"><?=$name?></option>
                    <?php
                        }
                    ?>
                </select>

                
            </div>
        </div>
        <div class="div_ende" id="div_ende">
            <div class="div_header">
                <p>Nach</p>
            </div>
            <div class="text"  id="p_nach_div">
                <select id="zu" name="zu">
                        <option class="test" value="0">Stadt auswählen</option>
                    
                </select>
            </div>
        </div>
        <div class="datum">
            <div class="date_hin">
                
                <div class="div_header">
                    <p>Hin</p>
                </div>
                <div class="tex2">
                    <input type="date" name="Hin" id="date_hin_input">                    
                </div>

            </div>
            
        </div>
        <div class="btn">
            <input type="submit" value="Suchen" id="btn_suchen">
        </div>
    </div>
</div>


<script>
    
    $("#btn_suchen").click(function(){
        überprüfen();
    });
    let i= 0;
    $("#von").change(function(){
        var speicher_von = $(this).val();
        console.log(speicher_von);
        $.ajax({
            type: "POST",
            url: "../ajax/zu_überbrüfen.php",
            data: {
                von: speicher_von
            },
            dataType: 'json',
            cache: false,
            cache: false,
            success: function(data) {
                var len = data.length;
                $("#zu").empty();
                $("#zu").append("<option value='0'>Stadt auswählen</option>");
                for( var i = 0; i<len; i++){
                    var name = data[i];
                    $("#zu").append("<option value='"+name+"'>"+name+"</option>");
                }
                var value = speicher_von;
               

            },
            error: function(xhr, status, error){
                console.error(xhr);
            }
        });
    });
</script>