<?php require 'header.php';
include '../../assets/PHP/comment.php';
?>

<?php
//insert.php
if (isset($_POST["post"])) {
    $conn = new mysqli("localhost", "root", "", "my_db");
    $subject = $_POST['subject'];
    $comment = $_POST['comment'];
    $query = "INSERT INTO request (request_subject,request_text) VALUES ('$subject','$comment')";
    mysqli_query($conn, $query);
}
?><div class="row">
    <div class="container col s10 m8 offset-m2">
        <div class="card  blue-grey lighten-5" style="padding: 5px 0px 0px 5px; border: 1px solid #EEE;">
            <div class="card-content">
                <h5 class="card-title center-align">Request</h5>
                <hr width="30%"><br>
                <form action="request.php" method="post" class="comment-form" id="form" autocomplete="off">

                    <div class="row">
                        <div class="input-field col s10 offset-s1">
                            <i class="material-symbols-outlined prefix">person</i>
                            <label for="textarea1"><?php echo $_SESSION['name'] ?></label><br>
                        </div>
                        <div class="input-field col s10 offset-s1">
                            <i class="material-symbols-outlined prefix">edit</i>
                            <textarea name="body" id="body" class="materialize-textarea" data-length="20"></textarea>
                            <label for="body">Subject</label>
                            <div class="red-text right-align"><?php echo $errors['tarea1']; ?></div>
                        </div>
                        <div class="input-field col s10 offset-s1">
                            <i class="material-symbols-outlined prefix">edit</i>
                            <textarea name="body1" id="body1" class="materialize-textarea" data-length="120"></textarea>
                            <label for="body1">request</label>
                            <div class="red-text right-align"><?php echo $errors['tarea2']; ?></div>
                        </div>
                    </div>
                    <div class="row center-align">
                        <button class="btn blue darken-2 waves-effect waves" type="submit" name="send">Request
                            <i class="material-symbols-outlined"></i>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php' ?>