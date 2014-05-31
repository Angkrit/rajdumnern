<?php function render_each_speaker($data){ ?>
<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-4">
        <div style="padding:0px 0px 10px 0px">
            <img src="image/commentator<?php echo $data['ven_id']?>.jpg"  >
        </div> 
        <div class="fb-like" data-href="http://128.199.230.16/rajdumnern/view.php?id=<?php echo $data['ven_id']?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
    </div>
        <!-- Commentator 1
        ================================================== --> 
        <div class="col-md-5">
            <div style="padding:20px;text-align:center; font-size:large;">
                ชื่อ <?php echo $data['ven_name'];?>
                <br />
                อายุ <?php echo $data['ven_age'];?> ประสบการณ์ <?php echo $data['ven_experience'];?> 
                <br />
                ผลงานที่ผ่านมา  <br />
                <?php echo $data['ven_introduction'];?> 
            </div>
            <form name="form1" method="post" action="index.php" >
                <input name="ven_id" type="hidden" size="10" value="<?php echo $data['ven_id']?>" />
                <table width="100%" border="0">
                    <tr bgcolor="#EC1C24">
                        <td width="50" align="center">
                            <img src="image/skill1.png" width="30" >
                        </td>
                        <td>Speaking Skill
                        </td>
                        <td width="50" align="center">
                            <label><input type="radio" name="skill1" value="4" checked>
                                <img src="image/vote1.png" width="30" >
                            </label>
                        </td>
                        <td width="40" align="center">
                            <label><input type="radio" name="skill1" value="3">
                                <img src="image/vote2.png" width="15" >
                            </label>
                        </td>
                        <td width="40" align="center">
                            <label><input type="radio" name="skill1" value="2">
                                <img src="image/vote3.png" width="15" >
                            </label>
                        </td>
                        <td width="50" align="center">
                            <label><input type="radio" name="skill1" value="1">
                                <img src="image/vote4.png" width="30" >
                            </label>
                        </td>
                    </tr>
                    <tr bgcolor="#FFCA05">
                        <td align="center">
                            <img src="image/skill2.png" width="30" >
                        </td>
                        <td>Soccer Knowledge
                        </td>
                        <td width="50" align="center">
                            <label><input type="radio" name="skill2" value="4" checked>
                                <img src="image/vote1.png" width="30" >
                            </label>
                        </td>
                        <td width="40" align="center">
                            <label><input type="radio" name="skill2" value="3">
                                <img src="image/vote2.png" width="15" >
                            </label>
                        </td>
                        <td width="40" align="center">
                            <label><input type="radio" name="skill2" value="2">
                                <img src="image/vote3.png" width="15" >
                            </label>
                        </td>
                        <td width="50" align="center">
                            <label><input type="radio" name="skill2" value="1">
                                <img src="image/vote4.png" width="30" >
                            </label>
                        </td>
                    </tr>
                    <tr bgcolor="#CCCCCC">
                        <td align="center">
                            <img src="image/skill3.png" width="30" >
                        </td>
                        <td>Entertainment Skill
                        </td>
                        <td width="50" align="center">
                            <label><input type="radio" name="skill3" value="4" checked>
                                <img src="image/vote1.png" width="30" >
                            </label>
                        </td>
                        <td width="40" align="center">
                            <label><input type="radio" name="skill3" value="3">
                                <img src="image/vote2.png" width="15" >
                            </label>
                        </td>
                        <td width="40" align="center">
                            <label><input type="radio" name="skill3" value="2">
                                <img src="image/vote3.png" width="15" >
                            </label>
                        </td>
                        <td width="50" align="center">
                            <label><input type="radio" name="skill3" value="1">
                                <img src="image/vote4.png" width="30" >
                            </label>
                        </td>
                    </tr>
                    <tr bgcolor="#6FC8C0">
                        <td align="center">
                            <img src="image/skill4.png" width="30" >
                        </td>
                        <td>Accuracy Skill
                        </td>
                        <td width="50" align="center">
                            <label><input type="radio" name="skill4" value="4" checked>
                                <img src="image/vote1.png" width="30" >
                            </label>
                        </td>
                        <td width="40" align="center">
                            <label><input type="radio" name="skill4" value="3">
                                <img src="image/vote2.png" width="15" >
                            </label>
                        </td>
                        <td width="40" align="center">
                            <label><input type="radio" name="skill4" value="2">
                                <img src="image/vote3.png" width="15" >
                            </label>
                        </td>
                        <td width="50" align="center">
                            <label><input type="radio" name="skill4" value="1">
                                <img src="image/vote4.png" width="30" >
                            </label>
                        </td>
                    </tr>
                    <tr bgcolor="#6FC8C0">
                        <td colspan="6" align="center">

                        </td>
                    </tr>
                    <tr bgcolor="#6FC8C0">
                        <td colspan="6" align="center">
                            <textarea name="comment" class="form-control" rows="4" maxlength="500" placeholder="Your Comment....." required ></textarea>
                        </td>
                    </tr>
                    <tr bgcolor="#6FC8C0">
                        <td colspan="6" align="center">
                            <br><p>
                            <input type="submit" name="button" class="btn btn-danger" value="Submit" />
                        </p>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div class="col-md-2">
    </div>
</div>
<? }  // end of rendering speaker?>