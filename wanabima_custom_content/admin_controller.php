<?php
/**
 * Created by PhpStorm.
 * User: emalsha
 * Date: 16/03/18
 * Time: 11:29 AM
 */


?>
<style>
    * {
        box-sizing: border-box;
    }

    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    input[type=submit] {
        background-color: rgba(106, 114, 114, 0.8);
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    input[type=submit]:hover {
        background-color: rgba(106, 114, 114, 0.4);
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        width:75%;
    }

    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
    }

    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    @media screen and (max-width: 600px) {
        .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
        .container{
            width: 100%;
        }
    }
</style>


<div class="container">
    <form action="" method="get">
        <input type="hidden" value="wanabimaplugin/plugin-page-content-admin-page.php" name="page">
        <div class="row">
            <div class="col-25">
                <label for="country">Country</label>
            </div>
            <div class="col-75">
                <select id="select_content" name="content">
                    <?php

                    global $wpdb;

                    $available_content = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."customcontent");
                    if ($available_content){
                        foreach ($available_content as $content){
                            ?>
                                <option value="<?php echo $content->id ?>"><?php echo ucfirst($content->text_page)." page : content ".$content->text_page_position ?></option>
                            <?php
                        }
                    }

                    ?>

                </select>
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Edit">
        </div>
    </form>
</div>

<?php

if ($_GET['content']) {
    panelShow();
}

function panelShow()
{
    global $wpdb;

    if ($_GET['content']) {
        $result = $wpdb->get_row("SELECT * FROM " . $wpdb->prefix . "customcontent WHERE id=" . $_GET['content']);

        if ($result) {
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-25">
                        <h3 style="text-transform: capitalize">Content Page : <?php echo $result->text_page ?></h3>
                    </div>
                    <div class="col-25">
                        <h2>Content Position : <?php echo $result->text_page_position ?></h2>
                    </div>
                </div>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $_GET['content']; ?>">
                    <div class="row">
                        <div class="col-25">
                            <label for="title">Title</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="title" name="title" placeholder="Title ..."
                                   value="<?php echo $result->text_title ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">title
                            <label for="subtitle">Sub Title</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="subtitle" name="subtitle" placeholder="Subtitle ..."
                                   value="<?php echo $result->text_sub_title ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="content">Content</label>
                        </div>
                        <div class="col-75">
                            <textarea id="content" name="content" placeholder="Write something .."
                                      style="height:200px"><?php echo $result->text ?></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <input type="submit" name="submit" value="Submit">
                    </div>
                </form>
            </div>


            <?php
        }
    }
}

?>

<?php

if ($_POST['submit']=="Submit"){
    $update_result = $wpdb->update(
        $wpdb->prefix."customcontent",
        array(
            'text_title' => $_POST['title'],
            'text_sub_title' => $_POST['subtitle'],
            'text' => $_POST['content'],
        ),
        array(
            'id' => $_POST['id'],
        ),
        array(
            '%s','%s','%s'
        ),
        array(
            '%d'
        )
    );

    if ($update_result){
        echo "<meta http-equiv='refresh' content='0'";
    }

}

?>

