<!-- Format -->
<div class="card mb-4" id="panel-export-format">
    <div class="card-header">
        <?php eT("Format");
         
        ?>

    </div>
    <div class="card-body">
        <div class="mb-3">
            <!-- Format -->
            <label for='export_format' class="col-md-6 form-label">
                <!--/*<?php eT("Export format:");?>-->
            </label>
            <div class="row">
                <?php foreach ($exports as $key => $info) : ?>
                <?php if (!empty($info['label'])) : ?>
                <div class="col-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="<?= $key; ?>" value="<?= $key; ?>"
                            <?= $info['label'] == $defaultexport ? 'checked' : '' ?>>
                        <label class="form-check-label" for="<?= $key ?>">
                            <?php echo $info['label']; ?>
                        </label>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>

            </div>
            <label for="csvfieldseparator" class="form-label">
                <?php eT("CSV field separator:"); ?>
            </label>
            <?php echo CHtml::dropDownList('csvfieldseparator', null, $aCsvFieldSeparator, ['class' => 'form-select w-auto']); ?>
            <?php 
            $db=mysqli_connect("localhost","root","","limesurvey");
            $id=basename($_SERVER['PHP_SELF'], '.php');
            $req=mysqli_query($db,"select qid from lime_surquestions where sid='".$id."'");
            $res=mysqli_query($db,"select * from lime_sursurvey_".$id."");
            $count=mysqli_num_rows($res);
            while ($data = mysqli_fetch_array($req)) {
            $sql=mysqli_query($db,"select question from lime_surquestion_l10ns where qid='".$data["qid"]."'");
            $q = mysqli_fetch_array($sql);
            if($q["question"]=="الاسم و اللقب" && $count!=0){
            echo "<label for='certificate' class='form-label'>
                 Export as Certificate:</label><br>
            <input type='button'  class='btn btn-primary  w-auto'  onclick=location.href='/limesurvey/attestation.php?id=".$id."' value='Certificate'>";
             break;
            }
        }?>
        </div>
    </div>
</div>