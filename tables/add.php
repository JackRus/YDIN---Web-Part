 <div class='row'>
    <div class='col-md-6'>
        <div class='blue-border'>
            <!-- ADD EVENT FORM -->
            <div class='table-name' style="margin-top: 0px;">
                <H3 style="margin-top: 10px;">Add Event</h3>
            </div>

            <script>
                $(function () {
                    $('#f1').on('submit', function (e) {
                    e.preventDefault();
                        $.ajax({
                            type: 'post',
                            url: '../submit.php',
                            data: $('#f1').serialize(),
                            success: function (data) {
                                $('#text1').fadeOut('slow', function(){
                                    $('#text1').fadeIn('slow').html(data);
                                });
                            }
                        });
                    });
                });
            </script>

            <form id='f1'>
                <fieldset style="vertical-align: top;">

                    <label for="date-date" class="mar20r">Date<span class="redstar">*</span>
                        <input autofocus required class="form-control input" name="date-date" type="date"/>
                    </label>

                    <label for="date-type" class="mar20r">Type<span class="redstar">*</span>
                        <select class="form-control input" required name="date-type">
                            <option disabled selected value="">-- Select --</option>
                            <option value="lecture">Lecture 18:00-20:30</option>
                            <option value="coding">Coding Hours 12:00-17:00</option>
                            <option value="section9_11">Section 9:00-11:00</option>
                            <option value="section12_14">Section 12:00-2:00</option>
                            <option value="quiz">Quiz 18:00-21:30</option>
                            <option value="track">Track 18:00-21:30</option>
                            <option value="special">Special Event</option>
                        </select>
                    </label>

                    <label for="date-date" class="mar20r">Event Name
                        <input class="form-control input" name="date-name" placeholder="Ex: Quiz 0 Review" type="text"/>
                    </label>

                    <div class="input block">
                        <button class="btn btn-primary mar20r inline" type="submit">
                            ADD
                        </button>
                        <div id='text1' class="date-message inline"></div>
                    </div>

                </fieldset>
            </form>
            <!-- END OF ADD EVENT FORM -->
        </div>
    </div>
    <div class='col-md-6'>
        <div class='red-border'>
            <!-- DELETE EVENT FORM -->
            <div class='table-name' style="margin-top: 0px;">
                <H3 style="margin-top: 10px;">Delete Event</h3>
            </div>

            <script>
                $(function () {
                    $('#f3').on('submit', function (e) {
                    e.preventDefault();
                        $.ajax({
                            type: 'post',
                            url: '../submit.php',
                            data: $('#f3').serialize(),
                            success: function (data) {
                                $('#text3').fadeOut('slow', function(){
                                    $('#text3').fadeIn('slow').html(data);
                                });
                            }
                        });
                    });
                });
            </script>

            <form id='f3'>
                <fieldset style="vertical-align: top;">

                    <label for="del-date" class="mar20r">Date<span class="redstar">*</span>
                        <input autofocus required class="form-control input" name="del-date" type="date"/>
                    </label>

                    <label for="del-type" class="mar20r">Type<span class="redstar">*</span>
                        <select class="form-control input" required name="del-type">
                            <option disabled selected value="">-- Select --</option>
                            <option value="lecture">Lecture 18:00-20:30</option>
                            <option value="coding">Coding Hours 12:00-17:00</option>
                            <option value="section9_11">Section 9:00-11:00</option>
                            <option value="section12_14">Section 12:00-2:00</option>
                            <option value="quiz">Quiz 18:00-21:30</option>
                            <option value="track">Track 18:00-21:30</option>
                            <option value="special">Special Event</option>
                        </select>
                    </label>

                    <div class="input block">
                        <button class="btn btn-primary mar20r inline" style="background-color: red;" type="submit">
                            DELETE
                        </button>
                        <div id='text3' class="date-message inline"></div>
                    </div>
                </fieldset>
            </form>
            <!-- END OF DELETE EVENT FORM -->
        </div>
    </div>
</div>

<div class='row'>
    
    <div class='col-md-6'>
        <div class='blue-border'>
            <!-- ADD ATTENDANCE RECORD FORM -->
            <div class='table-name' style="margin-top: 0px;">
                <H3 style="margin-top: 10px;">Add Attendance Record</h3>
            </div>

            <script>
                $(function () {
                    $('#f2').on('submit', function (e) {
                    e.preventDefault();
                        $.ajax({
                            type: 'post',
                            url: '../submit.php',
                            data: $('#f2').serialize(),
                            success: function (data) {
                                $('#text2').fadeOut('slow', function(){
                                    $('#text2').fadeIn('slow').html(data);
                                });
                            }
                        });
                    });
                });
            </script>

            <form id='f2'>
                <fieldset style="vertical-align: top;">

                    <label for="st-id" class="mar20r">ID #<span class="redstar">*</span>
                        <input class="form-control input" size='5' name="st-id" type="text"/>
                    </label>

                    <span class="mar20r">or </span>

                    <label for="st-email" class="mar20r">Email<span class="redstar">*</span>
                        <input class="form-control input" size="30" name="st-email" type="text"/>
                    </label>

                    <label for="st-date" class="mar20r">Date<span class="redstar">*</span>
                        <input required class="form-control input" name="st-date" type="date"/>
                    </label>

                    <label for="st-type" class="mar20r">Event Type<span class="redstar">*</span>
                        <select class="form-control input" required name="st-type">
                            <option disabled selected value="">-- Select --</option>
                            <option value="lecture">Lecture 18:00-20:30</option>
                            <option value="coding">Coding Hours 12:00-17:00</option>
                            <option value="section9_11">Section 9:00-11:00</option>
                            <option value="section12_14">Section 12:00-2:00</option>
                            <option value="track">Track 18:00-21:30</option>
                            <option value="special">Special Event</option>
                        </select>
                    </label>

                    <div class="input block">
                        <button class="btn btn-primary mar20r inline" type="submit">
                            ADD
                        </button>
                        <div id='text2' class="date-message inline"></div>
                    </div>
                </fieldset>
            </form>
            <!-- END ADD ATTENDANCE RECORD FORM -->
        </div>
    </div>
    <div class='col-md-6'>
        <div class='red-border'>
            <!-- DELETE ATTENDANCE RECORD FORM -->
            <div class='table-name' style="margin-top: 0px;">
                <H3 style="margin-top: 10px;">Delete Attendance Record</h3>
            </div>

            <script>
                $(function () {
                    $('#f4').on('submit', function (e) {
                    e.preventDefault();
                        $.ajax({
                            type: 'post',
                            url: '../submit.php',
                            data: $('#f4').serialize(),
                            success: function (data) {
                                $('#text4').fadeOut('slow', function(){
                                    $('#text4').fadeIn('slow').html(data);
                                });
                            }
                        });
                    });
                });
            </script>

            <form id='f4'>
                <fieldset style="vertical-align: top;">

                    <label for="del-id" class="mar20r">ID #<span class="redstar">*</span>
                        <input class="form-control input" size='5' name="del-id" type="text"/>
                    </label>

                    <span class="mar20r">or </span>

                    <label for="del-email" class="mar20r">Email<span class="redstar">*</span>
                        <input class="form-control input" size="30" name="del-email" type="text"/>
                    </label>

                    <label for="del-st-date" class="mar20r">Date<span class="redstar">*</span>
                        <input required class="form-control input" name="del-st-date" type="date"/>
                    </label>

                    <label for="del-st-type" class="mar20r">Event Type<span class="redstar">*</span>
                        <select class="form-control input" required name="del-st-type">
                            <option disabled selected value="">-- Select --</option>
                            <option value="lecture">Lecture 18:00-20:30</option>
                            <option value="coding">Coding Hours 12:00-17:00</option>
                            <option value="section9_11">Section 9:00-11:00</option>
                            <option value="section12_14">Section 12:00-2:00</option>
                            <option value="track">Track 18:00-21:30</option>
                            <option value="special">Special Event</option>
                        </select>
                    </label>

                    <div class="input block">
                        <button class="btn btn-primary mar20r inline" style="background-color: red;" type="submit">
                            DELETE
                        </button>
                        <div id='text4' class="date-message inline"></div>
                    </div>
                </fieldset>
            </form>
            <!-- END DELETE ATTENDANCE RECORD FORM -->
        </div>
    </div>
</div>

<div class='row'>
    <div class='col-md-6'>
        <div class='blue-border'>
            <!-- ADD STUDENT FORM -->
            <div class='table-name' style="margin-top: 0px;">
                <H3 style="margin-top: 10px;">Add Student</h3>
            </div>

            <script>
                $(function () {
                    $('#f5').on('submit', function (e) {
                    e.preventDefault();
                        $.ajax({
                            type: 'post',
                            url: '../submit.php',
                            data: $('#f5').serialize(),
                            success: function (data) {
                                $('#text5').fadeOut('slow', function(){
                                    $('#text5').fadeIn('slow').html(data);
                                });
                            }
                        });
                    });
                });
            </script>

            <form id='f5'>
                <fieldset style="vertical-align: top;">

                    <label for="us-name" class="mar20r">Name<span class="redstar">*</span>
                        <input class="form-control input" required name="us-name" type="text"/>
                    </label>

                    <label for="us-last" class="mar20r">Last Name<span class="redstar">*</span>
                        <input class="form-control input" required name="us-last" type="text"/>
                    </label>

                    <label for="us-email" class="mar20r">Email<span class="redstar">*</span>
                        <input class="form-control input" required size="30" name="us-email" type="text"/>
                    </label>

                    <label for="us-track" class="mar20r">Track
                        <select class="form-control input" name="us-track">
                            <option selected value="">-- Select --</option>
                            <option value="c#">C#</option>
                            <option value="js">JavaScript</option>
                            <option value="ios">Swift</option>
                        </select>
                    </label>

                    <label for="us-tf" class="mar20r">TF
                        <input class="form-control input" name="us-tf" type="text"/>
                    </label>

                    <div class="input block">
                        <button class="btn btn-primary mar20r inline" type="submit">
                            ADD
                        </button>
                        <div id='text5' class="date-message inline"></div>
                    </div>
                </fieldset>
            </form>
            <!-- END OF ADD STUDENT FORM -->
        </div>
    </div>
    <div class='col-md-6'>
        <!-- FORM CONTEINER -->
        <div class="red-border">
            <!-- DELETE STUDENT FORM -->
            <div class='table-name' style="margin-top: 0px;">
                <H3 style="margin-top: 10px;">Delete Student</h3>
            </div>

            <script>
                $(function () {
                    $('#f6').on('submit', function (e) {
                    e.preventDefault();
                        $.ajax({
                            type: 'post',
                            url: '../submit.php',
                            data: $('#f6').serialize(),
                            success: function (data) {
                                $('#text6').fadeOut('slow', function(){
                                    $('#text6').fadeIn('slow').html(data);
                                });
                            }
                        });
                    });
                });
            </script>

            <form id='f6'>
                <fieldset style="vertical-align: top;">

                    <label for="del-us-id" class="mar20r">ID #<span class="redstar">*</span>
                        <input class="form-control input" size='5' required name="del-us-id" type="text"/>
                    </label>

                    <label for="del-us-name" class="mar20r">Name<span class="redstar">*</span>
                        <input class="form-control input" required name="del-us-name" type="text"/>
                    </label>

                    <label for="del-us-last" class="mar20r">Last Name<span class="redstar">*</span>
                        <input class="form-control input" required name="del-us-last" type="text"/>
                    </label>

                    <label for="del-us-email" class="mar20r">Email<span class="redstar">*</span>
                        <input class="form-control input" required size="30" name="del-us-email" type="text"/>
                    </label>

                    <div class="radio">
                        <label>
                            <input type="radio" name="del-us-files" style="top: 0px;" value="notall" checked>
                            Delete only 1 record for THIS student from table STUDENTS
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <input type="radio" name="del-us-files" style="top: 0px;" value="all">
                            Delete ALL records for THIS student from ALL tables!
                        </label>
                    </div>

                    <div class="input block">
                        <button class="btn btn-primary mar20r inline" style="background-color: red;" type="submit">
                            DELETE
                        </button>
                        <div id='text6' class="date-message inline"></div>
                    </div>
                </fieldset>
            </form>
        </div> <!-- END OF FORM CONTEINER -->
        <!-- END OF DELETE STUDENT FORM -->
    </div>
</div>


</div> <!-- END OF MIDDLE -->
