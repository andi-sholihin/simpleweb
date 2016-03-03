-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 03, 2016 at 04:20 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpleweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `id_halaman` int(11) NOT NULL,
  `judul_halaman` varchar(20) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `no_urut` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id_halaman`, `judul_halaman`, `tipe`, `no_urut`) VALUES
(1, 'Home', 'artikel', 1),
(3, 'Tentang', 'artikel', 2),
(4, 'Blog', 'artikel', 3),
(5, 'Portfolio', 'artikel', 4),
(7, 'Berita', 'artikel', 5),
(8, 'Hubungi Kami', 'artikel', 6);

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul_konten` varchar(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `tgl_terbit` datetime NOT NULL,
  `id_halaman` varchar(10) NOT NULL,
  `isi` longtext NOT NULL,
  `jenis` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `judul_konten`, `username`, `tgl_terbit`, `id_halaman`, `isi`, `jenis`) VALUES
(1, 'Lorem ipsum dolor sit amet', 'andi', '2016-02-23 15:41:50', '1', '<p>Lorem ipsum dolor sit amet, te viris verterem eum, vim et brute consul iisque, tale mentitum forensibus id eos. Cu his iisque voluptatibus, ne mea liber libris officiis. Ut quo vivendum consetetur inciderint. Ubique ridens maiorum an eos, nostrud saperet accumsan nam ad.<br /><br />Vix esse integre sensibus ad, ad pro propriae appareat. Has petentium consequat omittantur te, magna meliore dissentias no nec. Te duo admodum reformidans. Qui minim phaedrum assentior ex. Labore legendos te vim.<br /><br />Nominavi molestiae definiebas no ius. Oratio impetus vim at, est ne feugiat vulputate adolescens, ei sea nibh voluptatum. Mei dicunt tibique id. Etiam qualisque et pri. Sale everti efficiantur sit at.<br /><br />Mei scripta eripuit et, eu mea diceret habemus detracto, mea ea choro virtute evertitur. Ei nam melius temporibus comprehensam. Ei vel tota dolore, duo ut magna incorrupte, maiorum convenire reprimique eu pro. At habeo praesent per, cu recusabo concludaturque cum. Nibh erant vidisse cu mel.<br /><br />Eum an utamur viderer scribentur, ea inani lobortis sit, mucius nonumes postulant at usu. His saperet periculis an, ius an animal veritus, nam ne sint urbanitas. At pri noluisse facilisi, ei eos duis facete, sea porro accusamus ad. Et unum meis mel, tempor facete delicata mea at, ius viris dolorum scripserit an. Quod suscipit ponderum usu ad, ea mea homero eirmod audiam, diam inani novum in vim.</p>', 'artikel'),
(2, 'His no tantas iudicabit philosophia', 'andi', '2016-02-23 15:46:31', '1', '<p>His no tantas iudicabit philosophia, ad eam malorum persecuti concludaturque. Cum an veri iracundia definitionem. Zril assentior in ius, nec ex magna populo. Partem suscipit mei ut, percipit dissentiunt ad mel. His quis probo volutpat no. Id reque aperiri est, vero eleifend no ius.<br /><br />Choro mucius petentium ne mei. Vix no ipsum convenire, agam tibique mandamus te nec. Cum meliore recteque interesset in, usu at labores liberavisse, eum cu minimum epicurei. Ea per oporteat iracundia.<br /><br />Movet eloquentiam cum ei. Vivendum elaboraret has in. Vel senserit abhorreant ne, reque ipsum possit id duo. Eos eu error corpora mediocritatem, ne sed corpora platonem aliquando.<br /><br />Quem tritani et qui. Mel veniam numquam cu. Eu mucius oportere interpretaris est, mel id primis sapientem argumentum. Te vix labore corpora ullamcorper. Platonem splendide pertinacia vel id, cu eum erroribus reprehendunt.<br /><br />Eos magna illud accumsan cu, eu putent intellegebat est, indoctum inciderint eu mei. Eripuit labores pro at. At accusam deserunt consequat pri, ad pri nullam senserit, cum at illum aliquam inimicus. Ludus facete aperiam ut sea, vis nulla ludus cu. Sint veri alienum in sea, est ei simul postea sapientem. Ius te stet vero adversarium, quem veniam antiopam eum in, eos te propriae reformidans.<br /><br />Ex sea errem ludus, duo id tota magna, nullam insolens te vim. Et clita delenit vel, id debet maiorum vis. Ea usu vidit quaestio antiopam. Qui oblique graecis appareat te. Eos nemore eligendi ei, epicurei nominati quo at, ne sea nulla sonet euripidis.<br /><br />Ut partem nusquam eos, vis decore persius te, ad dicat libris detracto vim. Vim an iuvaret eligendi, quis dico vim in. Mel soluta utamur verterem in. At fugit meliore vix, id eum mollis gloriatur. Pro id idque moderatius accommodare, in elit melius per.<br /><br />Ad clita nostro per, ius an assum dolores, cu ceteros tacimates salutandi usu. Vel eu nihil voluptua, mea torquatos instructior ut, atqui iusto nostrum his no. Vis te tantas omittam. Commune principes in nec. Cum utamur diceret ei, mea id prima nonumes voluptatibus, eam ei altera nominavi honestatis. Eum ex facete bonorum, veri deserunt molestiae sea et, id simul legimus ius.<br /><br />Pro ei nobis quaeque omittam, id ius choro molestiae, usu no inani bonorum. Id enim summo aeque nec, dolores tacimates ius ei. Mei vocent scripta mediocrem at, porro assueverit ad pri, an quod detraxit gloriatur sea. Et usu posidonium percipitur, qui an probatus volutpat imperdiet, vim phaedrum scripserit ut. Ex est virtute nominavi intellegam, odio simul appellantur cu his, id per omnis vocent. Te mundi suscipit intellegat pro.<br /><br />An sed tation legimus oporteat. Duo an minim tation, quo affert nostrum ei. Id iudico ignota dolorem eum, vix possim oblique volumus ne. Fugit quaeque noluisse id mei, pro augue tollit ei. Ad iudico inermis mei, duo legimus percipit et, sint torquatos mel ex.</p>', 'artikel'),
(3, 'Tentang Kami', 'andi', '2016-02-23 16:03:20', '3', '<p>Eam ea iisque iuvaret, tale nonumy nostrud pro ut. Dolore aliquid scaevola an pri, nusquam cotidieque adversarium pro in, illud vitae virtute et eos. Quo ad nostro tamquam. Ut vel pertinacia constituam, consul maluisset sea ne. Novum tamquam perpetua eu vis, nam et laudem principes patrioque, quot assueverit id nam. Id vim quem reformidans, duo an odio quando voluptatibus.<br /><br />Est amet facete no, meis feugait ea duo. Ea ius nisl doctus, est id cibo gloriatur, no mel audire facilisi. Vel et aeque explicari, quem nibh intellegat mea id, vix habemus offendit an. Ipsum ullamcorper id qui, quo prodesset sadipscing ad. Dicit mentitum praesent ea eos.<br /><br />Eos at graece conceptam, mea ornatus honestatis cu. Eam ei timeam epicuri copiosae, mel an ullum dicit nusquam. Tota lorem est te. Vim minimum mediocritatem an, interesset neglegentur necessitatibus ex has. Te fabulas expetenda sed, vix ad quis quando, ad vel animal suscipit.<br /><br />Ad possim impedit sapientem ius, an pro ancillae periculis. Esse commodo invidunt nec ut, lorem impetus omittam at mei. Solet oportere et ius, epicuri platonem cum eu, id iuvaret aliquid sit. Mea dicam aeterno constituam ut. Quo saepe ubique verear ne, te oblique singulis imperdiet eum, eu ferri vocent labitur vel.<br /><br />Qui et tempor percipit, ne quaeque vivendo facilisi vis, te malis adversarium his. Laoreet insolens ne mei, in magna pertinax repudiandae est, qui elit debet maiorum ex. Ei modo ludus accommodare mea. Ad eripuit ornatus mea.<br /><br />In augue nominavi oporteat vis, cu sed debet facete. Eos melius doctus no, ei dicant salutandi gubergren nam. Ceteros commune efficiendi his in, falli eripuit efficiantur mel an. Et lucilius intellegat nec. Nostrum singulis reprehendunt cu quo, eu ridens alienum vix. Vim te probo tation aliquando, quem maiestatis scribentur vix an. Qui rebum error essent ut, euismod sensibus et eum, quidam liberavisse cum an.<br /><br />Eu est error percipitur, aeque utroque has in. Cum et sint possit consetetur. Dico vide audiam quo ei, wisi dissentiet complectitur cum an. Vel nibh delectus oportere eu.<br /><br />Cu pro labitur accusata. Vis no vivendum democritum, omnis commune nam ea. Expetendis suscipiantur pri no, ne ius iusto admodum, nec case senserit ne. Ei sed etiam minim elitr, vero eligendi sadipscing mea te. Duis porro facete ex ius, eu quo enim facer, eu dico recusabo mel.<br /><br />Id justo corrumpit mei. Pri ea nulla constituto, mei enim platonem an. At deserunt theophrastus nec, ex assum tempor mea, dolores perpetua contentiones an quo. Has dolorum democritum suscipiantur te, eos lorem discere pertinax ut, prompta indoctum et sed. An etiam ponderum quo, fabellas repudiandae id vim. Ut esse inani ocurreret usu.<br /><br />Nam iuvaret interesset ea. Sit tractatos argumentum eu, sed case dicta ne. Usu sumo vocibus in, brute forensibus sententiae ut his. Nulla legendos prodesset te duo.</p>', 'artikel'),
(4, 'Elit conceptam delicatissimi ex nam', 'andi', '2016-02-23 16:04:25', '4', '<p>Cu his nisl tale, sale neglegentur eu has. Nisl tritani volutpat ut vel. Cum choro everti at. Eos at quot dissentias, mei ut dictas laoreet appellantur. Vim mundi perfecto scripserit ut, congue nemore inermis id cum. Sint impetus quo in, quo duis laoreet cotidieque no, mea ex unum aeque diceret.<br /><br />Ut eum everti mnesarchum. Vix ut dicam discere argumentum, vitae graeci tincidunt usu te. Odio epicuri eum id. Posse equidem scripserit ne eos, mei sale soluta ad. In lucilius efficiantur pro, mei te zril integre eleifend.<br /><br />Elit conceptam delicatissimi ex nam. Eos et noster commodo scripta. Illum eirmod id per. Errem legere placerat ut per, atqui fierent ponderum in sit.<br /><br />His brute tacimates te, vel epicuri qualisque elaboraret cu, at esse virtute scaevola his. Ut diam option repudiare per, vel nonumy cetero sanctus te. Quis veniam petentium mel id, essent theophrastus definitionem ius ad, ne quo quot percipitur. Aeque labores menandri ea eos, an per alii platonem. Labore legimus complectitur ne mei, usu ei elit nullam. Te quo epicuri definitiones, justo ullum numquam ad has, at prompta debitis cum.<br /><br />Sit at illud cetero similique, no eam cibo inimicus. Pro eu legimus civibus vulputate, eu eos audire persecuti voluptatibus. Nam expetenda comprehensam id, case impedit laboramus est eu, an postea epicuri pericula vel. Id mea tota offendit. Ea has volumus appareat abhorreant. Pro soleat fabulas concludaturque id, vix invenire constituto ne, persius appetere comprehensam vis ex.</p>', 'artikel'),
(5, 'Eam at congue maiorum', 'andi', '2016-02-23 16:04:41', '4', '<p>Eam at congue maiorum, ex sed movet vivendum lobortis, vis id diam atqui. Facete iuvaret ea mea. At aliquam electram sea, cu vis graeci scripta, eos eu nostrum adipisci aliquando. Eu elit clita percipitur quo.<br /><br />Vero nulla te mei, per labore suscipiantur necessitatibus te. Vide graece at eos, sonet iuvaret placerat mei ne. Id sit odio sonet. Ut cum odio diceret.<br /><br />Pri mazim comprehensam at, ad sea volumus salutandi scribentur. Erant ludus doctus quo et. Dicam civibus nominati vim ad. Cetero delicata in nec, mel ut erat electram patrioque. Vix fugit omittam detraxit eu, graece suscipit ut vim. Falli consequat mel ex. Minim voluptatibus cum ne.<br /><br />Purto alterum labores nec ea. Usu eu decore blandit, veri insolens in duo. Ei pro oblique oporteat neglegentur. Eam impetus constituto eu. Unum instructior ne his. Ex omnesque definitiones mei, quaeque vituperatoribus ad duo. Esse urbanitas conclusionemque vim ex, paulo expetendis vim at, at vidit harum quo.<br /><br />Ad viris consequat consequuntur ius, saperet efficiendi ut qui. Nibh ceteros sadipscing mei cu, quodsi alienum electram ius eu. Ponderum delicata in eos, no sed quaeque democritum. Ut congue animal per, torquatos pertinacia mel cu. In nec facilisi corrumpit repudiare, eu facilis apeirian vis.</p>', 'artikel'),
(6, 'Mel at doctus tamquam sadipscing', 'andi', '2016-02-23 16:05:04', '4', '<p>Mel at doctus tamquam sadipscing, dolore fuisset ponderum nam ne. Sumo urbanitas vituperatoribus ex pro. Aperiri deleniti adolescens id vis. Omnium audiam suscipit et his, porro sonet ex mea, ea his doming tamquam. Mea quod referrentur voluptatibus id. Ut sit dicta efficiantur disputationi.<br /><br />Ne quaestio sapientem has. Et cibo vivendo interesset nec, brute clita est ea. Luptatum reprehendunt ex vix, te pri magna illum consectetuer. At eam euismod civibus, eam cu labore efficiendi conclusionemque, doctus laboramus deterruisset ius ne.<br /><br />Suas tamquam civibus an vel. Natum idque commune ius ea, persius feugiat conceptam usu cu, mea no petentium vulputate contentiones. Duo aeterno expetenda assueverit ei, semper contentiones has id, inani viris verterem ad cum. Vis inani ludus ei, cu quo unum tamquam probatus, omnium labores laoreet vis cu. Dicit ceteros id qui, cu mei ignota doctus gloriatur.<br /><br />At mea numquam vocibus, ne vim wisi audire gloriatur, commodo scribentur eos no. Ad elitr scribentur vim, eum fabulas eloquentiam ad. Sale virtute accusam ei eos, vis hinc nonumy persius an. Mel iudico voluptatibus ne, tibique deleniti tacimates te vis. Ad cum ignota ponderum sententiae, id quo voluptua ocurreret posidonium.<br /><br />Ea sit fastidii salutandi. Porro decore recteque et nam, has facer quaeque laoreet ne. Ludus postea percipit id mel, eu atqui altera primis eos, tale ignota facilis est et. Meliore eleifend ei sea. Et quo discere expetenda evertitur, appareat evertitur mnesarchum duo eu.</p>', 'artikel'),
(7, 'Mel at doctus tamquam sadipscing', 'andi', '2016-02-23 16:05:57', '5', '<p>Nec at inani indoctum, ex mei alia melius. Sale ullum vix ea. Omnium concludaturque ut sed, quo erat melius cu. Eum et paulo inciderint liberavisse, et brute aliquid gubergren vis.<br /><br />Eu possit placerat praesent quo, eum te tale esse mazim. Commune placerat quaerendum et vis, at vivendum euripidis eos. Doctus numquam antiopam pro ut. Omnium legendos euripidis vix ne, officiis patrioque quo ut. Nec at dicit temporibus, an augue suscipit vix. Sea ex mutat albucius assentior, ceteros placerat recteque et vix. Ad has tale appareat, id dicat facilis petentium sit.<br /><br />Cu erat atqui tacimates ius, nisl viderer nec at. Mutat everti pro ne, id vis autem atqui harum, quis amet ei has. Justo sonet oratio id has. Ne eos exerci expetenda maiestatis, et quaestio omittantur cum. Ad sea inani equidem partiendo, eos debitis accusata appellantur te. Audire euismod eos ne, aliquip tincidunt quo ne, eros tation efficiantur ea duo.<br /><br />Fabellas salutatus cum ea. Dicant iracundia molestiae at pro, quando tantas diceret ei eos, duo ex quod appetere dignissim. Ut pri nostrud periculis. At verear quaeque principes vel, mel ex tamquam oporteat facilisi. Essent voluptaria usu an, et maiorum omittantur ius, mei an modus sadipscing scribentur.<br /><br />Duo ea ullum vituperatoribus, pro ferri incorrupte in. Libris perfecto conclusionemque no his. Eos singulis intellegebat no. Eruditi ornatus pri an, eos in inciderint interpretaris, has at ridens vocibus delicatissimi. Pertinax gloriatur ius eu. Recusabo prodesset cum ut, mel cu timeam vivendum hendrerit. Id malorum pericula sadipscing nam.</p>', 'artikel'),
(8, 'Cu erat atqui tacimates ius', 'andi', '2016-02-23 16:06:13', '5', '<p>Nec at inani indoctum, ex mei alia melius. Sale ullum vix ea. Omnium concludaturque ut sed, quo erat melius cu. Eum et paulo inciderint liberavisse, et brute aliquid gubergren vis.<br /><br />Eu possit placerat praesent quo, eum te tale esse mazim. Commune placerat quaerendum et vis, at vivendum euripidis eos. Doctus numquam antiopam pro ut. Omnium legendos euripidis vix ne, officiis patrioque quo ut. Nec at dicit temporibus, an augue suscipit vix. Sea ex mutat albucius assentior, ceteros placerat recteque et vix. Ad has tale appareat, id dicat facilis petentium sit.<br /><br />Cu erat atqui tacimates ius, nisl viderer nec at. Mutat everti pro ne, id vis autem atqui harum, quis amet ei has. Justo sonet oratio id has. Ne eos exerci expetenda maiestatis, et quaestio omittantur cum. Ad sea inani equidem partiendo, eos debitis accusata appellantur te. Audire euismod eos ne, aliquip tincidunt quo ne, eros tation efficiantur ea duo.<br /><br />Fabellas salutatus cum ea. Dicant iracundia molestiae at pro, quando tantas diceret ei eos, duo ex quod appetere dignissim. Ut pri nostrud periculis. At verear quaeque principes vel, mel ex tamquam oporteat facilisi. Essent voluptaria usu an, et maiorum omittantur ius, mei an modus sadipscing scribentur.<br /><br />Duo ea ullum vituperatoribus, pro ferri incorrupte in. Libris perfecto conclusionemque no his. Eos singulis intellegebat no. Eruditi ornatus pri an, eos in inciderint interpretaris, has at ridens vocibus delicatissimi. Pertinax gloriatur ius eu. Recusabo prodesset cum ut, mel cu timeam vivendum hendrerit. Id malorum pericula sadipscing nam.</p>', 'artikel'),
(9, 'Alienum mandamus ius cu', 'andi', '2016-02-23 16:06:51', '7', '<p>Facer explicari persecuti sit ne, volumus omittantur consequuntur duo ne. Ne vix ubique timeam. Vel stet gloriatur ad, brute aeque doming eam ne. Pri no vocent sententiae delicatissimi, no mel oratio prompta honestatis. Per option efficiendi eu, ut everti suscipit qui.<br /><br />Alienum mandamus ius cu. Te congue fierent repudiare duo. Cu has labitur quaerendum, an ubique democritum inciderint cum. Ius timeam meliore an, in choro nostrud quaerendum mel.<br /><br />Qui te nihil nobis dicunt, et eos probatus consequuntur. Duo sonet latine senserit ad, augue pertinax torquatos nam ei. Cu sale fastidii his, in officiis efficiantur mei, omnis pericula instructior eam eu. Mea ne justo assum. Sapientem principes euripidis ne eum, mel id dicat sapientem. Pri ne alia legimus efficiantur.<br /><br />No mei propriae facilisis vituperatoribus, ex epicuri molestie sea. Ne mei elit apeirian. Odio consul consequuntur eu sit. Ei quo utinam legere. Debitis dolores copiosae at ius, ei elit debitis molestiae qui.<br /><br />Nec ei aperiam facilisi appellantur, vis stet consectetuer at, tota ullum doctus cu duo. Vivendo consetetur ad mel, pri no quas referrentur. Id partem fastidii elaboraret nam, est audiam nominavi deseruisse ne. Ad nullam propriae dissentias vim, id duo debet consul pericula.</p>', 'artikel'),
(10, 'Mei cetero singulis an', 'andi', '2016-02-23 16:07:08', '7', '<p>Mei cetero singulis an. Ius elitr quidam neglegentur an, in alterum nusquam mei. Ei sea nominati efficiantur, te nemore appetere est, vis id atqui commune. Civibus nostrum insolens pro at. Aperiri sententiae an qui, ad veri laoreet deleniti mel. Viris semper dissentiunt has ei, eos tempor vivendum te.<br /><br />Pri sumo sint labore ea, ad nobis doctus quo. Meis tollit disputationi mel te. Elit voluptatibus et vel, cum no enim forensibus. Vix te fugit placerat philosophia. Te mel sint vidit incorrupte. Te qui admodum accusata volutpat, cum ei affert inermis scaevola.<br /><br />Eam doctus vulputate eu. Quo tempor mediocritatem ea, nam ut aeterno petentium, at est dicant eligendi consetetur. Possim debitis sententiae duo ea. Ea prima brute blandit mei. Tamquam efficiantur cu eos. Quem minim usu ne. Vis no mazim volumus maiestatis, eu sit referrentur vituperatoribus.<br /><br />His an reque mucius lobortis, alia dolorem contentiones eos at, cum dolores abhorreant efficiantur ut. Libris probatus eos et, an ius etiam exerci, at unum novum eleifend est. Eu eripuit laoreet sed, est ex malorum habemus honestatis. Elit accommodare ne vel. Ea munere impedit sit.<br /><br />Eam id conceptam intellegat, an quo nullam malorum, mea idque aliquam an. Propriae elaboraret et mel, iusto bonorum atomorum vix eu. Te illud vocent ius, quo unum accusata ei, alia lucilius facilisis vix ut. Magna brute oporteat qui at, idque audire convenire no vix. Mel ne scripta deseruisse.</p>', 'artikel'),
(11, 'Mei cetero singulis an', 'andi', '2016-02-23 16:07:21', '7', '<p>Mei cetero singulis an. Ius elitr quidam neglegentur an, in alterum nusquam mei. Ei sea nominati efficiantur, te nemore appetere est, vis id atqui commune. Civibus nostrum insolens pro at. Aperiri sententiae an qui, ad veri laoreet deleniti mel. Viris semper dissentiunt has ei, eos tempor vivendum te.<br /><br />Pri sumo sint labore ea, ad nobis doctus quo. Meis tollit disputationi mel te. Elit voluptatibus et vel, cum no enim forensibus. Vix te fugit placerat philosophia. Te mel sint vidit incorrupte. Te qui admodum accusata volutpat, cum ei affert inermis scaevola.<br /><br />Eam doctus vulputate eu. Quo tempor mediocritatem ea, nam ut aeterno petentium, at est dicant eligendi consetetur. Possim debitis sententiae duo ea. Ea prima brute blandit mei. Tamquam efficiantur cu eos. Quem minim usu ne. Vis no mazim volumus maiestatis, eu sit referrentur vituperatoribus.<br /><br />His an reque mucius lobortis, alia dolorem contentiones eos at, cum dolores abhorreant efficiantur ut. Libris probatus eos et, an ius etiam exerci, at unum novum eleifend est. Eu eripuit laoreet sed, est ex malorum habemus honestatis. Elit accommodare ne vel. Ea munere impedit sit.<br /><br />Eam id conceptam intellegat, an quo nullam malorum, mea idque aliquam an. Propriae elaboraret et mel, iusto bonorum atomorum vix eu. Te illud vocent ius, quo unum accusata ei, alia lucilius facilisis vix ut. Magna brute oporteat qui at, idque audire convenire no vix. Mel ne scripta deseruisse.</p>', 'artikel'),
(12, 'Nam vocent phaedrum ad', 'andi', '2016-02-23 16:08:12', '8', '<p>Nam vocent phaedrum ad, alia postulant necessitatibus ea has, vix cu clita luptatum democritum. At ornatus inimicus pri, vix ex qualisque patrioque. In qui impetus reformidans. Quo invidunt oportere sapientem an, euripidis pertinacia scriptorem an vim. Usu in eros causae regione, ferri autem his ad.<br /><br />Clita altera nonumes vix te. Id per agam nobis perpetua, ex sit eius prompta. Summo dicant recteque vis at, purto reque aperiri te ius. Ad vis soluta officiis verterem, at vide possit accommodare est. Ea vocent philosophia ius.<br /><br />Ex adhuc ceteros constituto quo, duo utinam alienum apeirian ea. Cu tation everti abhorreant quo. In eos appetere consetetur argumentum, sea ea liber decore soluta. Tale admodum detraxit in nam. Pri an assum officiis, cu eum inermis vivendo. Ei decore ignota petentium qui, impedit praesent ex nec.<br /><br />Atqui homero ea nec, ridens accumsan per cu, ut facer legimus nam. Altera nominati mel an. Dolore necessitatibus eam te, iudico rationibus eu est. Nonumes habemus erroribus per ei. Ei paulo ubique malorum nam, homero oportere patrioque eum cu. Ex pro suas zril graeco, ad qui erant singulis similique, ius an labore elaboraret accommodare. Ius nobis dignissim ex.<br /><br />Ut platonem neglegentur his, vim scaevola phaedrum an. Id nisl idque adipisci mei, pro modus phaedrum id. In vis vivendo interesset. Mea ex quod omittantur, veritus admodum copiosae quo ad. Eum te partem cetero detracto, eum at ipsum velit labores. Stet soluta te eam, partem accusata ad has, alii invenire ut sea. Pri adhuc impetus et, harum inermis ei has.</p>', 'artikel');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `ip` varchar(30) DEFAULT NULL,
  `waktu` datetime NOT NULL,
  `isi_pesan` longtext NOT NULL,
  `dibaca` enum('yes','no') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `pengirim`, `email`, `website`, `ip`, `waktu`, `isi_pesan`, `dibaca`) VALUES
(5, 'Buarto', 'buarto@yahoo.com', 'http://www.apaaja.com', '114.79.17.117', '2012-02-20 09:49:14', 'Halo, websitenya keren.. salam kenal dan salam hangat untuk seluruh keluarga Indonesia...', 'yes'),
(7, 'Yuli', 'yuli@yulia.com', 'http://www.yuliaja.com', '127.0.0.1', '2016-02-23 16:10:30', 'bagus mas websitenya keren. kayak orangnya. hahahahaaaaa', 'no'),
(8, 'Siska', 'siska@aja.com', 'http://siskaajadech.com', '127.0.0.1', '2016-02-23 16:11:51', 'hmmmm.. lumayan websitenya. buatnya susah gak ya? bikinin donk mas.. mas baik deh.. hehehe', 'no'),
(6, 'Budi', 'budi@budiaja.com', 'http://www.blablabla.com', '127.0.0.1', '2016-02-23 16:09:50', 'Erat congue utinam quo ut, meliore alienum suscipiantur per at. Te nam fabulas alienum omittantur, diceret constituto voluptatum ut per. Vel no eros vitae, te per vide dicam voluptua. Te verear accommodare contentiones ius. Nec eu timeam abhorreant rationibus. Qui id facer essent.\r\n\r\nSumo saepe homero qui ea, malis aliquam at his, ea pro homero vivendo consulatu. Debitis sadipscing efficiantur no per, vix ei vero adolescens, nominati eleifend no qui. Vis in oblique labores fierent, malorum corpora per ut, nec purto unum veritus eu. Aliquip equidem qui ex, ceteros inciderint ex mea, ex quod pertinacia suscipiantur vix.\r\n\r\nAn mea civibus commune interpretaris. Sea an placerat atomorum, etiam definitiones ei qui. Mel ex esse nihil ignota. Ne eam quem homero. Ius mentitum menandri legendos ei.', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` tinyint(1) NOT NULL,
  `judul_web` varchar(100) NOT NULL,
  `deskripsi_web` varchar(100) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `url_web` varchar(100) NOT NULL,
  `telpon` varchar(30) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `maintenance` enum('yes','no') NOT NULL,
  `tgl_setting` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `judul_web`, `deskripsi_web`, `email_admin`, `url_web`, `telpon`, `alamat`, `maintenance`, `tgl_setting`) VALUES
(1, 'Simple Web', 'Another simple content management system', 'admin.simpleweb@simpleweb.com', 'http://localhost/simpleweb', '08123456789', 'Jl. Raya Suka Ngawur No. 123', 'no', '2016-02-23 16:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `level` varchar(10) NOT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `email`, `level`, `last_login`) VALUES
('andi', 'ce0e5bf55e4f71749eade7a8b95c4e46', 'Andi Sholihin', 'dieka.91@gmail.com', 'admin', '2016-02-23 16:34:02'),
('rahilah', 'd09a8ee09111842d2a89611f5098a8bb', 'Rahilah', 'rahilah@yahoo.com', 'admin', '2012-02-17 04:22:18'),
('veki', 'f8fbac0db7dbfb9bdef3ab7dd91ca7f7', 'Veki Nurkholis', 'veki@yahoo.com', 'editor', '2012-02-18 01:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `widget`
--

CREATE TABLE `widget` (
  `id_widget` int(3) NOT NULL,
  `judul_widget` varchar(30) NOT NULL,
  `script` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `widget`
--

INSERT INTO `widget` (`id_widget`, `judul_widget`, `script`) VALUES
(1, 'Jam Dinding', '<embed src="images/digital.swf"  width="160" height="40" wmode="transparent" type="application/x-shockwave-flash">'),
(3, 'Jumlah Pengunjung', '<a href="http://www.easycounter.com/">\r\n<img src="http://www.easycounter.com/counter.php?adeni"\r\nborder="0" alt="Free Web Counters"></a>\r\n<br><a href="http://www.easycounter.com/">Web Counter</a>'),
(4, 'Buku Tamu', '<!-- BEGIN CBOX - www.cbox.ws - v4.3 -->\r\n<div id="cboxdiv" style="position: relative; margin: 0 auto; width: 235px; font-size: 0; line-height: 0;">\r\n<div style="position: relative; height: 455px; overflow: auto; overflow-y: auto; -webkit-overflow-scrolling: touch; border:#DBE2ED 1px solid;"><iframe src="http://www7.cbox.ws/box/?boxid=324398&boxtag=sx7yq5&sec=main" marginheight="0" marginwidth="0" frameborder="0" width="100%" height="100%" scrolling="auto" allowtransparency="yes" name="cboxmain7-324398" id="cboxmain7-324398"></iframe></div>\r\n<div style="position: relative; height: 75px; overflow: hidden; border:#DBE2ED 1px solid; border-top: 0px;"><iframe src="http://www7.cbox.ws/box/?boxid=324398&boxtag=sx7yq5&sec=form" marginheight="0" marginwidth="0" frameborder="0" width="100%" height="100%" scrolling="no" allowtransparency="yes" name="cboxform7-324398" id="cboxform7-324398"></iframe></div>\r\n</div>\r\n<!-- END CBOX -->');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id_halaman`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`),
  ADD KEY `username` (`username`),
  ADD KEY `id_halaman` (`id_halaman`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `widget`
--
ALTER TABLE `widget`
  ADD PRIMARY KEY (`id_widget`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id_halaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
