<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Munteanu-->
<!-- * Date: 1/23/2018-->
<!-- * Time: 10:08 PM-->
<!--https://form.jotform.co/80236413944859-->
<!-- */-->
<!--<form class="" method="POST" enctype="multipart/form-data" action="" target="frame">-->
    <label for="thename">Numele tau: </label>
    <input type="text" id="thename" name="math-name"
           value="<?= htmlspecialchars($TEMPLATE_VARS['mathHistory']->username) ?>"/>

    <div id="question" style="display: none ">
        <div>
            <H4> Status: </H4>

            <div style="display: inline-block;" id="progress">x answered, x skipped</div>
        </div>
        <div style="display: inline-block;"> Time remaining:</div>
        <div style="display: inline-block;" id="timer">xx:xx</div>
        <div id="question_math">A x B</div>
    </div>

    <div id="user" style="display: none">

        <label for="result">Raspuns: </label>
        <input type="number" id="result"/>

        <p>Hit space to skip a question.</p>

        <input type="submit" value="Stop" id="quit_to_options"/>
    </div>

    <div id="score" style="display: none">
        <h1>Time Over</h1>
        In <span id="score_time">a certain time</span>, you have solved
        <span id="score_total"> n </span> problems (skipped
        <span id="score_skipped"> k </span>).
    </div>

    <div id="options">

        <h1>Math Trainer</h1>

        <h3>Train your mental arithmetic skills</h3>

        <div id="error_wrapper" style="display: none">
            <span id="options_error"></span>
        </div>

        <input type="submit" id="start" value="Start" style="display: none"/>

        <H4>Test duration:</H4>

        <div>
            <input type="number" name="timer length" min="1" id="timer_length" value="1"/>
            <label for="timer_length"> minutes. </label>
        </div>

        <h4>Test operations:</h4>

        <div id="op_wrapper">
            <input type="checkbox" id="op_add"/> <label for="op_add">Addition</label>
            <input type="checkbox" id="op_sub"/> <label for="op_sub">Subtraction</label>
            <input type="checkbox" id="op_mul" checked="checked"/> <label for="op_mul">Multiplication</label>
            <input type="checkbox" id="op_div"/> <label for="op_div">Division</label>
        </div>

        <h4>Test Number range:</h4>

        <div>
            <div>
                <label for="min"> From: </label>
                <input type="number" id="min" value="2"/>
            </div>
            <div>
                <label for="max"> To: </label>
                <input type="number" id="max" value="9"/>
            </div>
        </div>

        <div>
            <input type="checkbox" id="avoid_negative" checked="checked"/>
            <label for="avoid_negative">Avoid negative results for subtraction?</label>
            <span style="font-size: 0.6em">Only applicable if min and max aren't negative.</span>
        </div>


    </div>
<!--</form>-->
<!--<iframe style="display: none;" name="frame">-->
<!---->
<!--</iframe>-->