document.querySelector("select").addEventListener('change', function (e) {
    setAttr('city', e.target.value)
})


function setAttr(prmName,val){
    var res = '';
    var d = location.href.split("#")[0].split("?");
    var base = d[0];
    var query = d[1];
    if(query) {
        var params = query.split("&");
        for(var i = 0; i < params.length; i++) {
            var keyval = params[i].split("=");
            if(keyval[0] != prmName) {
                res += params[i] + '&';
            }
        }
    }
    res += prmName + '=' + val;
    window.location.href = base + '?' + res;
    return false;
}


let params = (new URL(document.location)).searchParams;
select = document.querySelector("select")
default_city = document.querySelector("#default-city")
switch (params.get('city')) {
    case 'MSK':
        select.value = 'MSK'
        break
    case 'SPB':
        select.value = 'SPB'
        break
    case 'NSK':
        select.value = 'NSK'
        break
    case 'KZN':
        select.value = 'KZN'
        break
    default:
        select.value = default_city.value

}
