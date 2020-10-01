<?php
include __DIR__ . '/partials/templates/header.php';
 ?>

 <div class="container p-3">
   <form action="partials/create/server.php" method="post">
     <div class="form-group">
       <label for="roomNumber">Numero della stanza</label>
       <input type="number" class="form-control" name="roomNumber" value="" placeholder="Inserisci il numero della stanza" id="roomNumber">
     </div>
     <div class="form-group">
       <label for="floor">Piano</label>
       <input type="number" class="form-control" name="floor" value="" placeholder="Inserisci il piano" id="floor">
     </div>
     <div class="form-group">
       <label for="beds">Numero di letti</label>
       <input type="number" class="form-control" name="beds" value="" placeholder="Inserisci i letti" id="beds">
     </div>
     <div class="form-group">
       <input type="hidden" class="form-control" name="id" value="" id="id">
     </div>
     <div class="form-group">
       <input type="submit" class="form-control bg-warning" value="Inserisci">
     </div>
   </form>
 </div>


 <?php
 include __DIR__ . '/partials/templates/footer.php';
  ?>
