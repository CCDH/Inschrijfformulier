$('.next-button').click(function(){
    var index = $(this).attr('id');
    if($(this).attr('value') === 'save'){
        saveValues(index);
    }

    if(index == '9' || index===9){
        loadLeftSide();
        loadRightSide();
    }

    fadeOut(index).queue(function(){
        fadeIn(parseInt(index) + 1);
    });
});

$('.back-button').click(function(){
    var index = $(this).attr('id');

    fadeOut(index).queue(function(){
        superFadeIn(parseInt(index) - 1);
    });
});

$('.clickable-circle').click(function(){
    user['work'] = $(this).attr('value');
})

$('.clickable-rectangle').click(function(){
    var type =$(this).attr('name');
    user[type] = user[type] + ',' + $(this).attr('value');

    $(this).css('border-left', '20px solid rgb(229,0,67)');
});

$('#file').click(function(){
    $('#realFile').click();
});

$('#cv').click(function(){
    $('#realCV').click();
});

function fileUpload(event){
    var file =  event.files[0].name;
    $('#file').attr('value', file);
    user['file'] = file;
}

function cvUpload(event){
    var file =  event.files[0].name;
    $('#cv').attr('value', file);
    user['cv'] = file;
}

function fadeOut(index){
    return findObject(index).hide('fast');
}

function fadeIn(index){
    return findObject(index).show('fast');
}
function superFadeIn(index){
    return findObject(index).css('display', 'block');
}

function findObject(id){
    return $('.form-section#' + id);
}

function saveValues(index) {
    findObject(index).find('input, textarea').each(function () {
        var value = $(this).val();
        console.log(this)
        console.log(value);
        user[$(this).attr('name')] = value;
    });
}
function saveTime(type){
    user.work = type;
}


let user = {
    'first_name': '',
    'last_name': '',
    'email': '',
    'remark': '',
    'work': '',
    'work_time': '',
    'work_area': '',
    'file': '',
    'cv': '',
    'url': '',
}
function loadLeftSide(){
   $('.end-container.first').html(
       '<p><b>Voornaam: </b>' + user.first_name + '</p><br />' +
       '<p><b>Achternaam: </b>' + user.last_name + '</p><br />' +
       '<p><b>E-mailadres: </b>' + user.email + '</p><br />' +
       '<p><b>Ik werk liever: </b>' + user.work + '</p><br />' +
       '<p><b>Beschikbaarheid: </b>' + user.work_time.substring(1) + '</p><br />' +
       '<p><b>Interessegebieden: </b>' + user.work_area.substring(1) + '</p><br />'
   );
}

function loadRightSide(){
    $('.end-container.second').html(
        '<div class="wrapper-left"><p><b>Motivatie: </b>' + user.remark + '</p><br />' +
        '<p><b>Aangeleverde documenten: </b>' + user.file + '</p><br />' +
        '<p><b>Aangeleverde URL: </b>' + user.url + '</p><br />' +
        '<p><b>Aangeleverd CV: </b>' + user.cv + '</p><br /></div></div>'

    );
}
