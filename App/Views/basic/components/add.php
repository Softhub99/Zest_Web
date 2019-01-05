<?= \Zest\View\View::view('nav'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<title>Add Component</title>
<br><br>
<style type="text/css">
  .form {
    background-color: #fff!important;
  }
</style>
 <form action='<?=site_base_url()?>/components/add/process' method='post' class="row">
    <div class="col m8 s10 offset-m2 offset-s1 form">
          <div class='col m6 s6 offset-m5 offset-s3'>
             <h4>Component</h4>
          </div>
      <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s10 offset-s1">
          <input id="title" name='title' type="text" class="validate" autocomplete="off">
          <label for="title">Title</label>
        </div>
      </div>           
      <div class="row">
        <div class="input-field col s10 offset-s1">
        <textarea id="description" name='description' class="materialize-textarea"></textarea>
        </div>
      </div>  
    </div>
  </div>
      <div class='row'>
        <div class='col m12 s12'>
            <div class='col m3 s3'>
                <input class='btn zest' type='submit' name='submit' value='Submit' style='color:#fff' />
             </div>   
        </div> 
      </div>   
    </div>
  </div>  

<?= \Zest\View\View::view('footer'); ?>
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
<script>
var simplemde = new SimpleMDE({ element: document.getElementById("description") });
</script>