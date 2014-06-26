<?php?>
<form id="formAdmin" method="post" action="http://localhost/ExiaStoreProjet/Model/addProdAdmin.php">
    <label for="reference"><br>Reference :</label>
    <input type="text" name="reference" id="reference" /><br/>
    
    <label for="idkindarticle"><br>Type :</label>
    <select name="idkindarticle" id="idkindarticle">
        <option value="CD">CD</option>
        <option value="DVD">DVD</option>
    </select><br/>
    
    <label for="name"><br>Name :</label>
    <input type="text" name="name" id="name" /><br/>
    
    <label for="priceht"><br>Priceht :</label>
    <input type="number" name="priceht" id="priceht" step="any"/><br/>
    
    <label for="describe"><br>Describe :</label>
    <textarea name="describe" id="describe"></textarea><br/>
    
    <label for="stock"><br>Stock :</label>
    <input type="number" name="stock" id="stock"/><br/>
    
    <label for="realisedate"><br>Realise date :</label>
    <input type="date" name="realisedate" id="realisedate"/><br/>
    
    <label for="artist_realisator"><br>Realisator :</label>
    <input type="text" name="artist_realisator" id="artist_realisator"/><br/>
    
    <label for="recordlabel_studio"><br>Label :</label>
    <input type="text" name="recordlabel_studio" id="recordlabel_studio"/><br/>
    
    <label for="threshold"><br>Threshold :</label>
    <input type="number" name="threshold" id="threshold"/><br/>
    
    <input type="hidden" name="idstatearticle" value="1"/>
    <input type="hidden" name="idtva" value="1"/>
    
    <input type="submit" value="Register" class="auto-style1" style="width: 90px" />
</form>