<div class="titulo">Integração CSS</div>

<h1>
    <?php
      echo 'olá';
      echo '<small>'; 
      echo ' Mundo'; 
      echo '</small>';
    ?>
</h1>


<!-- Esteé um blloco resumido sem o php -->
<?= "<div center azul> Outra forma de digitar </div>" ?>


<div center><button dobro><?= "Legal"?></button></div>

<style>
  button{
    padding: 5px 20px;
    background-color: #4286f4;
    color: #EEE;
    font-weight: bold;
    border-radius: 10px;
  }

  [center]{
    display: flex;
    justify-content:center;
  }

  [azul]{
    color: #4226f4;
  }

  [dobro]{
    font-size: 4rem;
  }
</style>