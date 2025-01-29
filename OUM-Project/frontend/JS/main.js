function submitButton(){
    
    var code = document.getElementById('code');
    // var style = document.getElementById('style');
    // var script = document.getElementById('script');
    var codeExucter = document.getElementById('execute-code');
    

    // var styleExucte = "<style>" + style.value + "</style>";
    

    codeExucter.innerHTML = code.value ;

    // run(script);
}

function run(script){
    return eval(script.value);

}