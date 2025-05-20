     <?php
$i = $_POST["numero"];


while($i <1 || $i >10){
        echo "numero invalido";
        return;
}
echo "numero valido";