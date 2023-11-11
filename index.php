<?php 
include './inc/db.php';
include './inc/form.php';

include './inc/db_close.php';

?>
<?php include_once './parts/header.php';?>
    <div class="container">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">اربح مع رنيم</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <p id="countdown"></p>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
      </div>
        <div class ="container">
      <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ اعلاه</li>
  <li class="list-group-item">سأقوم بث مباشر لمدة ساعة عبارة عن اسئلة واجوبة حرة للجميع</li>
  <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك</li>
  <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
  <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
</ul>
        </div>
    </div>
<div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form class ="mt-5"action=<?php $_SERVER['PHP_SELF'] ?> method="POST">
    <h3>الرجاء ادخال معلوماتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name = "firstName" id="firstName" class="form-control"  value="<?php echo $firstName ?>">
    <div class="form-text error"><?php echo $errors['firstNameError']?></div>
  </div>
  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير </label>
    <input type="text" name = "lastName" id="lastName" class="form-control"  value="<?php echo $lastName ?>">
    <div class="form-text error"><?php echo $errors['lastNameError']?></div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name = "email" id="email" class="form-control"  value="<?php echo $email ?>">
    <div  class="form-text error"><?php echo $errors['emailError']?></div>
  </div>
  
  <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
</form>
</div></div>
<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div> 
    
<!-- Button trigger modal -->
<div class ="d-grid gap-2 col-6 mx-auto my-5">
     <button type="button" id="winner" class="btn btn-primary">
  اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
     
        <h5 class="modal-title" id="modal">الرابح في المسابقة</h5>
      
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user):?>
        <h1 class="display-3 text-center modal-title" id="modal"><?php echo htmlspecialchars($user['firstName']). ' ' . htmlspecialchars($user['lastName']);?></h1>
        <?php endforeach;?>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>


<?php include_once './parts/footer.php';?>


