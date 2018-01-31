/**
 * Created by Munteanu on 1/25/2018.
 */
console.log('in math.js');


//if (testScore) {
function writeit() {
    console.log('test score exists!');
    var testTime = document.getElementById('score_time').innerHTML;
    var testScore = document.getElementById('score_total').innerHTML;
    ajaxRequest({
            url: 'math.php',
            data: {
                page: 'ajax',
                action: 'mathAjax',
                testTime: testTime,
                testScore: testScore
            }
        },
        doNothing(testTime, testScore),
        function (message) {
            console.log(message);
        });
//}
}

function doNothing(thetime, thescore) {
    console.log(' ... ajax success ... ' + thetime + thescore );
}