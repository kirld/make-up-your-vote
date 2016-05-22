function showProvince(prov) {
    if(document.images) document.getElementById('img_ID').src= 'img/map/' + prov + '.jpg';
}

function colorProvince(prov){
    if(document.images) document.getElementById('img_ID').src= 'img/map/' + prov + '.jpg';
}

            
    var mps = {
        // provinces list as object/array
        'yukon': [
            { img: 'img/map/mps/BagnellLarry_Lib.jpg', name: 'Larry Bagnell', party: 'Liberal' },
        ],
        'bc': [
            { img: 'img/map/mps/AldagJohn_Lib.jpg', name: 'John Aldag', party: 'Liberal' },
            { img: 'img/map/mps/AlbasDan_CPC.jpg', name: 'Dan Albas', party: 'Conservative' },
            { img: 'img/map/mps/MayElizabeth_GP.jpg', name: 'Elizabeth May', party: 'Green Party'},
            { img: 'img/map/mps/KwanJenny_NDP.jpg', name: 'Jenny Kwan', party: 'NDP'},
        ],
        'al': [
            { img: 'img/map/mps/AboultaifZiad_CPC.jpg', name: 'Ziad Aboultaif', party: 'Conservative' },
            { img: 'img/map/mps/BoissonnaultRandy_Lib.jpg', name: 'Randy Boissonnault', party: 'Liberal' },
            { img: 'img/map/mps/DuncanLinda_NDP.jpg', name: 'Linda Duncan', party: 'NDP' },
            { img: 'img/map/mps/CalkinsBlaine_CPC.jpg', name: 'Blaine Calkins', party: 'Conservative' },
        ],
        'manitoba':[
            { img: 'img/map/mps/BergenCandice_CPC.jpg', name: 'Candice Bergen', party: 'Conservative' },
            { img: 'img/map/mps/BlaikieDaniel_NDP.jpg', name: 'Daniel Blaikie', party: 'NDP' },
            { img: 'img/map/mps/DuguidTerry_Lib.jpg', name: 'Terry Duguid', party: 'Liberal' },
            { img: 'img/map/mps/BezanJames_CPC.jpg', name: 'James Bezan', party: 'Conservative' },
        ],
        'newbrunswick': [
            { img: 'img/map/mps/HarveyTJ_Lib.jpg', name: 'T.J. Harvey', party: 'Liberal' },
            { img: 'img/map/mps/LudwigKaren_Lib.jpg', name: 'Karen Ludwig', party: 'Liberal' },
            { img: 'img/map/mps/LeblancDominic_Lib.jpg', name: 'Dominic LeBlanc', party: 'Liberal' },
            { img: 'img/map/mps/FinniganPat_Lib.jpg', name: 'Pat Finnigan', party: 'Liberal' },
        ],
        'novascotia': [
            { img: 'img/map/mps/FillmoreAndy_Lib.jpg', name: 'Andy Fillmore', party: 'Liberal' },
            { img: 'img/map/mps/JordanBernadette_Lib.jpg', name: 'Bernadette Jordan', party: 'Liberal' },
            { img: 'img/map/mps/FraserSean_Lib.jpg', name: 'Sean Fraser', party: 'Liberal' },
            { img: 'img/map/mps/FraserColin_Lib.jpg', name: 'Colin Frase', party: 'Liberal' },
        ],
        'nfld': [
            { img: 'img/map/mps/McDonaldKen_Lib.jpg', name: 'Ken McDonald', party: 'Liberal' },
            { img: 'img/map/mps/WhalenNick_Lib.jpg', name: 'Nick Whalen', party: 'Liberal' },
            { img: 'img/map/mps/FooteJudy_Lib.jpg', name: 'Judy Foote', party: 'Liberal' },
            { img: 'img/map/mps/HutchingsGudie_Lib.jpg', name: 'Gudie Hutchings', party: 'Liberal' },
        ],
        'northTeritories': [
            { img: 'img/map/mps/McLeodMichael_Lib.jpg', name: 'Michael McLeod', party: 'Liberal' },
        ],
        'nunavut': [
            { img: 'img/map/mps/TootooHunter_Lib.jpg', name: 'Hunter Tootoo', party: 'Liberal' },
        ],
        'ontario': [
            { img: 'img/map/mps/AlbrechtHarold_CPC.jpg', name: 'Harold Albrecht', party: 'Conservative' },
            { img: 'img/map/mps/AlleslevLeona_Lib.jpg', name: 'Leona Alleslev', party: 'Liberal' },
            { img: 'img/map/mps/AngusCharlie_NDP.jpg', name: 'Charlie Angus', party: 'NDP' },
            { img: 'img/map/mps/BadaweyVance_Lib.jpg', name: 'Vance Badawey', party: 'Liberal' },
        ],
        'pei': [
            { img: 'img/map/mps/CaseySean_Lib.jpg', name: 'Sean Casey', party: 'Liberal' },
            { img: 'img/map/mps/EasterWayne_Lib.jpg', name: 'Wayne Easter', party: 'Liberal' },
            { img: 'img/map/mps/MacAulayLawrence_Lib.jpg', name: 'Lawrence MacAulay', party: 'Liberal' },
            { img: 'img/map/mps/MorrisseyRobert_Lib.jpg', name: 'Robert Morrissey', party: 'Liberal' },
        ],
        'quebec': [
            { img: 'img/map/mps/AmosWilliam_Lib.jpg', name: 'William Amos', party: 'Liberal' },
            { img: 'img/map/mps/AubinRobert_NDP.jpg', name: 'Robert Aubin', party: 'NDP' },
            { img: 'img/map/mps/BarsalouDuvalXavier_BQ.jpg', name: 'Xavier Duval', party: 'Bloc Quebecois' },
            { img: 'img/map/mps/BertholdLuc_CPC.jpg', name: 'Luc Berthold', party: 'Conservative' },
        ],
        'saskatchewan': [
            { img: 'img/map/mps/AndersonDavid_CPC.jpg', name: 'David Anderson', party: 'Conservative' },
            { img: 'img/map/mps/BensonSheri_NDP.jpg', name: 'Sheri Benson', party: 'NDP' },
            { img: 'img/map/mps/JoliboisGeorgina_NDP.jpg', name: 'Georgina Jolibois', party: 'Liberal' },
            { img: 'img/map/mps/LukiwskiTom_CPC.jpg', name: 'Tom Lukiwski', party: 'Conservative' },
        ]


    };

function clickonProvince(province) {
    var mps_list = mps[province];

    var html = '';
    $.each(mps_list, function(index, mps){
        html += '<div class="mps-box large-3 medium-3 small-12 columns"><ul><li class="mps-name">'+ mps.name +'</li>';
        html += '<li><img class="mps-img" src="'+ mps.img +'" alt="mps images"></li>';
        html += '<li class="mps-party">'+ mps.party +'</li></ul></div>';
    // var liTag = document.getElementsByClassName('mps-party');
    // if(mps.party.innerHTMl === "Liberal" ){
    //     mps.party[0].style.backgroundColor = "red";
    // }
    // else if(mps.party === "NDP"){
    //     // liTag.style.backgroundColor = "pink";
    // }   
    //     console.log(mps.party);
    });
    
    // add list to output container
    $('.resultBox').html(html);

}



function focusOnLoad(){
    colorProvince('quebec');
    clickonProvince('quebec');
}