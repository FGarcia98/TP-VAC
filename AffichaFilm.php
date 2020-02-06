<div class="col-sm-6 col-md-4">  
    <div class="thumbnail">


        <img src="<?php echo $imagefilm;?>" alt="...">

        <div class="caption">
            <h4><?php echo $titrefilm;?></h4>
            <FORM action="" méthode="POST">
                <input name="idFilm" type="hidden" value="<?php echo $idfilm;?>"/>
                <select name="Notes films" id="Notes films-select">
                    <option value="1" selected>5 étoiles</option>
                    <option value="2" selected>4 étoiles</option>
                    <option value="3" selected>3 étoiles</option>
                    <option value="4" selected>2 étoiles</option>
                    <option value="5" selected>1 étoile</option>
                    </select> 
            </FORM>
        </div>
    </div>
</div>