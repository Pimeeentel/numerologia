<!DOCTYPE html>
<html lang="PT-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<title>Numerologia</title>
</head>
<body>
	
	<div class="container-fluid">...</div>

	<div class="container">
		<div class="row">
			<div class="col-lg">
				
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">Nome Completo:</div>
					</div>
					<input id="txt1" type="text" name="nome" class="form-control" required>
				</div><br>

				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">Data de Nascimento:</div>
					</div>
					<input id="txt2" type="date" name="nome" class="form-control" required>
				</div><br>

				<div class="btn-group">
					
					<button class="btn btn-info">Calcular</button>

				</div>

			</div>
			<div class="col-sm" id="result">
				...
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.4.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>


	<script type="text/javascript"> 

	    var letras = {

	        a : 1,
	        i : 1,
	        q : 1,
	        j : 1,
	        y : 1,
	        b : 2,
	        k : 2,
	        r : 2,
	        c : 3,
	        g : 3,
	        l : 3,
	        s : 3,
	        d : 4,
	        m : 4,
	        t : 4,
	        e : 5,
	        h : 5,
	        n : 5,
	        u : 6,
	        v : 6,
	        w : 6,
	        x : 6,
	        ç : 6,
	        o : 7,
	        z : 7,
	        f : 8,
	        p : 8,
	        á : 3,
	        â : 8,
	        ä : 2,
	        à : 2,
	        ã : 4,
	        é : 7,
	        ë : 10,
	        è : 10,
	        ê : 12,
	        í : 3,
	        ï : 2,
	        ì : 2,
	        î : 8,
	        ó : 9,
	        ö : 14,
	        ò : 14,
	        õ : 10,
	        ô : 14,
	        ú : 8,
	        ü : 12,
	        ù : 12,
	        û : 13,
	        ñ : 8


	    };

		    function somarValores(){

	        //EXPRESSÂO

	        var s0 = document.getElementById("txt1").value;
	        var s1 = s0.toLowerCase();
	        var s2 = s1.split(' ');

	        var s7 = 0;

	        for(x=0; x < s2.length; x++) {

	            var s3 = s2[x];
	            var s4 = s3.split('');

	                for(y=0; y < s3.length; y++) {

	                    
	                    var s5 = s4[y];
	                    var s6 = letras[s5];
	                    var s7 = s7+s6;
	                    var s8 = s7.toString();

	                                      

	                    

	                }

	                if(s8.length > 1 && s8 != 22 && s8 != 11) {

	                            var s9 = s8.split('');
	                            var s10 = parseInt(s9[0]);
	                            var s11 = parseInt(s9[1]);
	                            var s7 = s10+s11;

	                        }  


	                        if(s7 == 10) {
	                            s7 = 1;
	                        }
	        }

	        if(s7 == 1) {
	        	var es = "Expressão 1 – Independente e determinado "+
				"<br>O Número um na Expressão corresponde aos pioneiros, líderes, influentes, inventivos e independentes. Possui personalidade forte, é dominador, enérgico, ambicioso, original, determinado e pouco cooperativo. Tem mente planejadora, realizando seus projetos sem se importar com o resultado dos outros envolvidos, caso haja. Tem forte tendência a dominação e faz isso com todos, seja consciente ou inconscientemente. Possui ousadia e vive sonhando com grandes empreendimentos, incluindo os pioneiros, e está sempre à procura de novidades que possam ser viáveis no presente ou futuro. Seu êxito profissional, afetivo e pessoal, depende exclusivamente da sua forma única e particular de vivenciar as coisas, não sendo influenciada pelos demais. Individualista, gosta de fazer tudo sozinho, o que dificilmente o faz aceitar conselhos ou sugestões dos outros. Sua personalidade tem aspecto arrogante e ditatorial, fazendo com que hajam dificuldades em todos os tipos de relacionamentos, sejam afetivos, pessoais ou comerciais e isso o lavará a fazer inimizades com certa facilidade. O número 1 é um líder nato, por isso, trabalhos monótonos ou subalternos devem ser evitados (como contador ou caixa de banco, etc.), pois o deixaria deprimido, insatisfeito e até estressado. Deve buscar trabalhar como líder, na chefia ou para si mesmo, evitando que se aborreça ao receber ordens, principalmente se estas ordens vierem de alguém que possua um estudo inferior ao seu. Tem sensibilidade emocional e grande habilidade em dar e receber afetos, porém, precisa encontrar uma forma visível de expressar seus sentimentos, em vez de mostrar que vive apenas em busca do êxito profissional e financeiro. Essa sua sensibilidade emocional pode ficar em desequilíbrio quando fica desanimado ou desestimulado, o que poderá levar a cair nos dramas emocionais das outras pessoas. "+
				 
				"<br>LADO POSITIVO Liderança, influente, criatividade, originalidade, audácia, otimismo, competitividade, independência, sociabilidade, pioneirismo, atitudes progressistas e forte vigor físico. "+
				 
				"<br>LADO NEGATIVO Egocentrismo, antagonismo, autoritarismo, arrogância, impaciência, instabilidade emocional, pouco controle emocional e tendência ao ciúme.  ORIENTAÇÕES Deve ter a ordem e o método como principais meios para atingir suas metas, bem como ter essas metas bem estipuladas em mente, dando assim o seu máximo na execução delas. Deve evitar mandar nos outros ou ser arrogante, inclusive com os que possuem menos conhecimentos que você, evitando intrigas desnecessárias. Tem tendência à procrastinação, deixando coisas inacabadas, e deve trabalhar sua determinação, indo até o fim do que quer que inicie. Deve adquirir novos conhecimentos, ser prudente e ponderado, buscando sabedoria suficiente para desenvolver seu grande potencial de realização.  Precisa ser cooperativo, ajudando os outros e se interessando pelos interesses e necessidades dos mesmos. Deve evitar o egocentrismo.";
	        } else if(s7 == 2) {
	        	var es = "Expressão 1 – Independente e determinado "+
				"<br>O Número um na Expressão corresponde aos pioneiros, líderes, influentes, inventivos e independentes. Possui personalidade forte, é dominador, enérgico, ambicioso, original, determinado e pouco cooperativo. Tem mente planejadora, realizando seus projetos sem se importar com o resultado dos outros envolvidos, caso haja. Tem forte tendência a dominação e faz isso com todos, seja consciente ou inconscientemente. Possui ousadia e vive sonhando com grandes empreendimentos, incluindo os pioneiros, e está sempre à procura de novidades que possam ser viáveis no presente ou futuro. Seu êxito profissional, afetivo e pessoal, depende exclusivamente da sua forma única e particular de vivenciar as coisas, não sendo influenciada pelos demais. Individualista, gosta de fazer tudo sozinho, o que dificilmente o faz aceitar conselhos ou sugestões dos outros. Sua personalidade tem aspecto arrogante e ditatorial, fazendo com que hajam dificuldades em todos os tipos de relacionamentos, sejam afetivos, pessoais ou comerciais e isso o lavará a fazer inimizades com certa facilidade. O número 1 é um líder nato, por isso, trabalhos monótonos ou subalternos devem ser evitados (como contador ou caixa de banco, etc.), pois o deixaria deprimido, insatisfeito e até estressado. Deve buscar trabalhar como líder, na chefia ou para si mesmo, evitando que se aborreça ao receber ordens, principalmente se estas ordens vierem de alguém que possua um estudo inferior ao seu. Tem sensibilidade emocional e grande habilidade em dar e receber afetos, porém, precisa encontrar uma forma visível de expressar seus sentimentos, em vez de mostrar que vive apenas em busca do êxito profissional e financeiro. Essa sua sensibilidade emocional pode ficar em desequilíbrio quando fica desanimado ou desestimulado, o que poderá levar a cair nos dramas emocionais das outras pessoas. "+
				 
				"<br>LADO POSITIVO Liderança, influente, criatividade, originalidade, audácia, otimismo, competitividade, independência, sociabilidade, pioneirismo, atitudes progressistas e forte vigor físico. "+
				 
				"<br>LADO NEGATIVO Egocentrismo, antagonismo, autoritarismo, arrogância, impaciência, instabilidade emocional, pouco controle emocional e tendência ao ciúme.  ORIENTAÇÕES Deve ter a ordem e o método como principais meios para atingir suas metas, bem como ter essas metas bem estipuladas em mente, dando assim o seu máximo na execução delas. Deve evitar mandar nos outros ou ser arrogante, inclusive com os que possuem menos conhecimentos que você, evitando intrigas desnecessárias. Tem tendência à procrastinação, deixando coisas inacabadas, e deve trabalhar sua determinação, indo até o fim do que quer que inicie. Deve adquirir novos conhecimentos, ser prudente e ponderado, buscando sabedoria suficiente para desenvolver seu grande potencial de realização.  Precisa ser cooperativo, ajudando os outros e se interessando pelos interesses e necessidades dos mesmos. Deve evitar o egocentrismo. ";
	        } else if(s7 == 3) {
	        	var es = "Expressão 3 – Criativo e comunicativo "+
				"<br>O Número três na Expressão corresponde aos comunicadores, pessoas criativas, imaginativas, inventivas, que amam a família (mesmo não aparentando isso), gostam de harmonia, ternura, dar e receber amor, sentindo-se felizes ao contribuírem com a felicidade dos outros. Por ser uma pessoa criativa, está sempre buscando algo no qual possa expressar-se, como algum tipo de arte ou alguma forma de expressão e comunicação. Terá muitos amigos divertidos e alegres, pois como gosta de comunicar-se, prefere amigos sociáveis e bem humorados. Os dons decorativos lhe fornecem uma percepção aguçada da beleza, forma e cores, fazendo com que possua dons aptos para todo tipo de decoração. Tudo que faz chama a atenção dos demais, pois possui uma mistura entre infantil, ingênuo e imaturo, com traços de espontaneidade, originalidade e exclusividade, tornando o que faz ser sempre algo novo e único. O lado comunicativo e espirituoso fará com que busque diversão e longas conversas, conhecendo vários tipos de assuntos, dos mais simples aos mais intrigantes, e se for uma pessoa culturalmente desenvolvida, facilmente irá buscar por respostas profundas sobre a vida, acabando por explorar as áreas espirituais e místicas.  Trabalha melhor suas qualidades quando não tem que ser prático, persistente e responsável. Tem tendência à dispersão, fazendo com que deixe alguns projetos pequenos inacabados. Por outro lado tem ambição, e dificilmente desiste dos seus objetivos, quando percebe a grandeza e retorno que pode lhe gerar tal objetivo. Como tem forte poder de persuasão e comunicação, sabe tirar proveito dos demais, e por isso prefere profissões onde possa dar ordens e não recebê-las. Por ter muitos talentos, pode ter diversas ocupações ou passatempos, devendo explorar as artes, literatura e religiões, que além de ser uma ótima forma de usar suas energias, ainda lhe promoverá conhecimento nas áreas as quais já se possui inclinações naturais. Deve administrar bem o tempo, assim obterá sucesso no que se empenhar em fazer. Vive mais o agora, não se preocupando com o ontem ou com o amanhã, o que o fará não se aborrecer com facilidade. Quando possui preocupações ou problemas, é difícil externá-los, mostrando sempre estar feliz e de bem com a vida. Com raiva pode ficar agressivo ou violento no momento da raiva, mas depois não guardará mágoas ou ressentimentos. LADO POSITIVO Criatividade, imaginação, inspiração, autoexpressão, forte poder de comunicação, talento artístico, força de vontade, determinação, produtividade, lealdade, franqueza, clareza nas palavras, bom humor, felicidade, otimismo, entusiasmo, espontaneidade, simplicidade, originalidade, forte poder de persuasão, sociabilidade e amor às amizades. "+   
				 
				"<br>LADO NEGATIVO Imaginação excessiva, pouca afetividade, comodismo, preguiça, fica entediada com facilidade, ostentação, extravagância, hipocrisia, vaidade, ambição, pessimismo, mau humor e pouca praticidade."+ 
				 
				"<br>ORIENTAÇÕES Como não gosta de rotina e adora aprender coisas novas, tenderá a ter diversas experiências na busca por algo que o desafie mentalmente, e como também possui o dom da persuasão, deverá usar essas capacidades trabalhando na área da comunicação, vendas, artes, escrita e área editorial, porém, em qualquer um dos casos deve ser seu próprio chefe, trabalhando para si, pois não suporta receber ordens. No lado afetivo, é aconselhável escolher bem sua metade antes de tomar decisões sérias, pois existe uma tendência forte que o leva a ter várias experiências amorosas ao longo da vida. ";
	        } else if(s7 == 4) {
	        	var es = "Expressão 4 – Perseverante e obstinado "+
				"<br>O Número quatro na Expressão mostra maturidade, um ser que já nasceu com o senso de responsabilidade. É realista, perseverante, firme nos seus propósitos, tem esperanças da realização de seus desejos, tem força de vontade, segue e gosta de regras, é prático, econômico, sólido, disciplinado, persistente, organizado e prestativo. Tem resistência física, fazendo-o suportar dores ou desconfortos físicos sem questionar. Tem ótimo talento para construir produtos tangíveis e úteis, necessitando ver suas construções e obras, e mesmo que essas coisas não tenham grande utilidade, as faz com amor, pois é dotado de talento manual e adora estar ocupado nesse tipo de atividade braçal ou manual. Prefere a rotina, ficando mais à vontade trabalhando e fazendo aquilo que já conhece e sabe como fazer com excelência, e isso o faz ter receio em aventurar-se em atividades novas. Detesta pessoas desonestas, preguiçosas, hipócritas e sem visão ampla do futuro. Não gosta de se envolver em discussões fúteis, sem motivos lógicos. É um ser que não guarda rancor, mágoa, ressentimento, ódio, ofensa ou constrangimentos, esquecendo-os rapidamente. Por ter grande capacidade em assumir responsabilidades, cooperar, ajudar e proteger os outros, pode ser bem-sucedido em trabalhos de equipe, e por suas aptidões manuais, será bem visto e admirado por seus talentos e praticidades manuais, porém, como detesta receber ordens, será mais bem-sucedido trabalhando sozinho ou por conta própria, evitando assim muitos aborrecimentos. Por sua natureza organizada, poderá dirigir seu negócio sozinho e com eficiência. Por ser organizado e equilibrado financeiramente, poderá investir no mundo financeiro ou administrar negócios, pois sabe lidar bem com dinheiro.  Quando trabalha para os outros é visto como alguém estável, prático, eficiente e ideal para determinado serviço, sendo considerado bom e confiável naquilo que faz. Por ser muito exigente consigo mesmo, acaba sendo o mesmo com os demais, tornando-se duro e por vezes cruel, mas justifica isso com sua forma de ser consigo mesmo. Prefere a lógica dos fatos, baseando-se nos fatos reais e comprovados. Pode ser teimoso e de difícil persuasão, quanto a aceitar novidades ou algo desconhecido.  Embora seja prático no cotidiano, pode ser lento quando o assunto é diferente ou novo, levando certo tempo para aceitar e aprender. Normalmente faz suas tarefas e atividades até o fim, tornando-o uma pessoa confiável."+ 
				 
				"<br>LADO POSITIVO Organização, praticidade, caráter, autodisciplina, paciência, perseverança, persistência, sinceridade, honestidade, confiança, obstinação, caráter, determinação, dedicação, prestatividade, cooperação e trabalho sério. "+
				 
				"<br>LADO NEGATIVO Teimosia, impaciência, introspecção, rigidez, procrastinação, autoritarismo, autodestrutivo, pouco comunicativo, reprimido, muito econômico, pouca sensibilidade e sentimentos ocultos ou ressentimentos.  "+
				 
				"<br>ORIENTAÇÕES Por ser sincero, evite magoar os outros com seus julgamentos ou críticas, pois podem se virar contra você, não lhe ajudando com seus projetos ou não lhe prestando bons serviços; nesse caso, veja o que elas têm de positivo e as elogie, fazendo-as darem o melhor de si. Deve ser original, ter suas próprias ideias e tomar suas próprias decisões. Deve evitar ser autoritário e vigoroso, aprendendo a ser persuasivo. ";
	        } else if(s7 == 5) {
	        	var es = "Expressão 5 - Versátil e ousado "+
				"<br>O Número cinco na Expressão mostra versatilidade, criatividade, ousadia, agitação e movimento. Ama a liberdade e deseja viajar o mundo em busca de novos conhecimentos, novas experiências e novos prazeres. É agradável e sociável, sendo bem-vindo em festas e reuniões. Por ser versátil, gosta de ocupações que envolvam o contato com pessoas e com o público, podendo assim agir e exprimir-se livremente. No lado profissional não aceita receber ordens, principalmente se vier de pessoas com menos estudos ou capacidades inferiores às suas. Trabalhos pesados, cansativos ou enfadonhos não lhe agradam, preferindo então os trabalhos intelectuais ou os que possam lhe colocar em destaque, como chefe, líder ou encarregado de vendas, setor de criação, marketing ou pesquisas. Por possuir uma postura sociável e simpática, consegue lidar facilmente com todos os tipos de pessoas, sejam elas influentes, intelectuais ou ricas. Por vezes consegue agarrar oportunidades rapidamente, reagindo a situações inesperadas com coragem e vigor. Consegue adaptar-se facilmente a todos os tipos de situações, sejam elas positivas ou negativas. Possui mente rápida e precisa, sendo capaz de ter pensamentos profundos, analíticos e técnicos. Tem espírito original e independente que busca o tempo todo por liberdade pessoal. "+
				 
				"<br>LADO POSITIVO Versatilidade, adaptabilidade, criatividade, instintos fortes, sedução, sorte, ousadia, amor pela liberdade, espirituosidade, curiosidade, sociabilidade e misticismo.  "+
				 
				"<br>LADO NEGATIVO Falta de confiabilidade, mutação, procrastinação, dispersão, inconsistência, libidinosidade, confiança extrema e teimosia."+
				 
				"<br>ORIENTAÇÕES Precisa cultivar a cooperação e compreensão, evitando ser voluntarioso, obstinado, pessimista, negativo e pouco comunicativo. Deve ter cuidado com o excesso de desejo pela liberdade pessoal, evitando que esta cause danos aos outros. Precisa usar sua coragem e disposição para concluir seus projetos pessoais, pois por ter tendência à dispersão é comum que inicie muitas coisas e não as conclua, tendo uma coleção de coisas inacabadas e deixadas para trás em seu caminho. Use sua vasta experiência em diversos assuntos para dar conclusão aos seus projetos. ";
	        } else if(s7 == 6) {
	        	var es = "Expressão 6 – Generoso e compreensivo"+ 
				"<br>O Número seis na Expressão corresponde ao amor, à família, ao lar, ao conforto de casa; mas também traz os opostos, como união e sedução, junção e confusão, vício e virtude, desejo de casamento e incertezas depois de casado, pode ser cheio de confusões e discórdias, mas, se for evoluído e souber usar bem essa vibração, o 6 atrairá muito amor, amizades e alegrias. O lema do 6 é amar e ser amado, e quando não pode viver esse amor, fica perdido, sem saber como agir ou proceder. Ama sua família acima de tudo, embora viva no mundo, não deixa de gostar dos momentos em família, ao lado dos que ama. É respeitável, sociável e um bom anfitrião, cumprimentando a todos em uma reunião social ou evento. Tem orgulho dos bens que possui e gosta de demonstrar os talentos e realizações da família. Tem bom gosto, bom senso de estética e sabe apreciar o que é belo, sendo uma vibração bem utilizada por artistas famosos, que expressam suas qualidades através do próprio trabalho.  Um dos seus talentos é ensinar, pois consegue se colocar no lugar dos outros, facilitando a forma com que os ensina, sendo uma pessoa voltada para a família, o lar, a comunidade e a educação, mantendo a estabilidade e proteção. Tem forte senso ético, o que o traz certa dificuldade em fazer determinados tipos de negócios, pois não acredita que “os fins justificarão os meios”. Para garantir o bem-estar coletivo, pode anular-se ou privar-se de algo, na intenção de trazer igualdade a todos. É uma pessoa calma de modo geral, porém, se lhe criticarem ou contradisserem, poderá explodir em questão de segundos, o que ocorre mais facilmente quando essas pessoas nascem nos dias 29, 30, 31 ou 1 de cada mês. Por gostar de ajudar ao próximo e por querer ver todos felizes, alegres e saudáveis, ajuda a todos sem esperar por retribuições, o que pode fazê-lo passar por “idiota”, já que os demais se aproveitam de sua boa vontade. Essa vibração pode gerar dificuldades em tomar decisões ou fazer escolhas, devendo pensar bem antes de decidir-se sobre algo. Como tem muitos interesses distintos, deve sempre buscar por ter um objetivo concreto e dedicar-se a ele, não perdendo o foco com o excesso de distrações, que podem deixá-lo dividido entre seus ideais e o desejo de satisfação material. A expressão 6 exigirá grande equilíbrio no setor financeiro, pois um lado de sua natureza tem forte atração por dinheiro e luxo e o outro deseja obter tudo por meio do trabalho, use da sua grande persuasão e habilidade para sempre manter o equilíbrio e tirar o melhor dessas situações. Será um excelente marido ou companheiro, já que se entrega por inteiro aos seus relacionamentos, no entanto, exige a mesma dedicação por parte de sua amada, o que por vezes não acontece, levando-o a ficar frustrado e desestabilizado emocionalmente por longos períodos. "+
				 
				"<br>LADO POSITIVO Amabilidade, compaixão, solidariedade, bondade, generosidade, humanitarismo, confiabilidade, compreensão, idealismo, expressão, persuasão, mundanismo, senso artístico, equilíbrio e vida doméstica. "+
				 
				"<br>LADO NEGATIVO Teimosia, indecisão, timidez, ansiedade, franqueza excessiva, descontentamento, perfeccionismo, dominação, desconfiança, cinismo, egocentrismo e egoísmo.  "+
				 
				"<br>ORIENTAÇÕES Para atingir sucesso financeiro e profissional, deve se dedicar a profissões humanitárias, preferencialmente sendo incentivado pelos que ama. Deve evitar desperdiçar suas energias e a não se preocupar com as opiniões alheias. Precisa aprender a dizer não, mesmo que isso ofenda os outros. ";
	        } else if(s7 == 7) {
	        	var es = "Expressão 7 – Sábio e intuitivo "+
				"<br>O Número sete na Expressão corresponde aos estudiosos, que buscam conhecer todos os mistérios do mundo através da pesquisa e conhecimento, e assim conseguem atingir sua própria evolução. O 7 é o número da sabedoria, da realeza, do triunfo, da fama, da honra, da boa reputação, do conhecimento, do perfeccionismo e da vitória. É inteligente e consegue aprender e assimilar mais rápido que os demais. Possui firmeza em seus propósitos, sendo uma pessoa honesta, leal, amiga, profunda e elevada moralmente. Seus interesses são mais aprofundados, como filosofia, política, misticismo, religião e assuntos extrafísicos. Gosta dos momentos de solidão, pois é neles que faz suas autoanálises. Por ser uma pessoa sábia, será comum ser procurado para dar conselhos ou opiniões. Tem grande generosidade, o que o faz perdoar os outros facilmente. Por ter grande capacidade de discernimento e intuição, prefere fazer apenas o que acredita ser correto, desprezando as ideias alheias. Sua inteligência o torna capaz de influenciar os outros com maior facilidade. Por ser geralmente inteligente, perspicaz e com aguçado sexto sentido, consegue avaliar pessoas ou situações mais rapidamente que os outros, o que torna seu o desempenho melhor que o dos demais, principalmente quando ocupa cargos de chefia, onde trabalha com mais eficiência que nos trabalhos físicos.  É uma pessoa aberta às críticas, gostando de ouvir os outros pontos de vista, analisando-os, para pôr fim tirar suas conclusões sobre si mesmo. Pode passar uma falsa imagem de autoconfiança. Não gosta de futilidades ou ilegalidades. Pode ficar deprimido ou triste se lhe obrigarem a fazer aquilo que não deseja, o que dificilmente faz. É de certo modo uma pessoa arredia, calada, quieta, introvertida e isolada. Nos relacionamentos afetivos é inicialmente frio, demorando a “esquentar”. Pode vir a ser incompreendido, considerado estranho, solitário, diferente e incomum. "+
				 
				"<br>LADO POSITIVO Inteligência, educação, caráter, lealdade, amizade, honestidade, confiança, seriedade, meticulosidade, racionalidade, idealismo, reflexão, poderes psíquicos e visão analítica. "+
				 
				"<br>LADO NEGATIVO Introspecção, solidão, isolamento, baixa autoestima, falta de autoconfiança, comodismo, egocentrismo, dissimulação, engano, fingimento, ceticismo, falta de sentimentos e pouco amável.  "+
				 
				"<br>ORIENTAÇÕES Deve dar mais atenção ao lado afetivo e sentimental, pois esquece que os outros precisam de atenção, amor e carinho. Precisa primeiro estabelecer bases sólidas na vida, evitando o comodismo e aproveitando todas as oportunidades que lhe surgem. Precisa satisfazer seu lado intelectual exercendo alguma atividade em prol da humanidade, beneficiando a todos e a si mesmo. Para aproveitar melhor a vida, deve fazer meditação ou ioga, recebendo assim as inspirações vindas de seu eu interior. Deve evitar todos os tipos de vícios ou uso de remédios.  ";
	        } else if(s7 == 8) {
	        	var es = "Expressão 8 – Competente e organizado "+
				"<br>O Número oito na Expressão corresponde aos líderes, empresários e executivos. Possui o dom do comando, liderança, autoridade, responsabilidade e competência. Geralmente está em cargos de chefia ou dirigindo seu próprio negócio; caso isso não ocorra, se tiver que trabalhar como subalterno, ficará insatisfeito e até trabalhará sem ânimo e motivação. A vibração 8 é forte, mostra lutas, grandes conquistas, boas expectativas e vitórias; mas também pode trazer rupturas, ameaças e falsas expectativas; precisando aprender a tirar o melhor proveito dessa vibração. Trabalhador, é conhecido pelos bens que possui e pelo trabalho honesto que executa, sendo visto como o exemplo de pessoa bem-sucedida e abastarda. Por ser extremamente dedicado ao trabalho e ao acúmulo de bens, é comum que sofra com inveja, pois o veem como alguém que atrai dinheiro em tudo que faz. Organizado, justo e muito dedicado à profissão, em momentos difíceis e complicados é sempre chamado para solucionar qualquer impasse, pois possui bom discernimento, constância e senso de justiça. Geralmente não sai correndo em busca de fortuna, pois como sabe lidar com dinheiro, sabe que conseguirá conquistar tudo o que deseja; por outro lado, quando por algum motivo se desestabiliza financeiramente, é sempre por motivos alheios à sua vontade, como quando tem sociedades e o sócio é desregrado financeiramente. Precisa controlar bem a forma com que mantém sociedades, para que não seja vítima da má administração dos outros ou incompetência dos mesmos, já que lida com dinheiro de forma instintiva e os outros não, o que faz a sua capacidade de avaliação ser muito mais avançada que os demais. Por vezes, sua intuição e sexto sentido o levará a ter golpes de sorte em investimentos financeiros, porém, isso ocorre ocasionalmente, devendo ser sempre analítico e realista em suas ações. Como gosta de possuir bens, evitar ser extravagante garantirá a estabilidade financeira, caso contrário, em desequilíbrio na administração do que possui, poderá sofrer com altos e baixos. Caso não seja evoluído, poderá passar por cima de tudo e de todos em busca de sua realização profissional, material ou financeira. Se puder unir sua autoridade natural com a capacidade de organização e a criatividade, certamente exercerá um papel importante e fundamental em qualquer empresa. Embora pareça ser frio e evasivo, essa aparência é erronia, já que não consegue expressar seus sentimentos; nesse caso, por traz dessa falsa aparência existe um ser carinhoso, amoroso, meigo, carente de afeição e atenção e com muito calor humano. É austero, prático, direto, seguro de si, generoso (quando quer) e responsável, porém, quando as coisas que planeja saem fora de seus planos, poderá se tornar violento e arrogante. Como o 8 é o número do êxito material, é comum que deseje ser rico, fazer fortuna, juntar bens materiais e possuir a maior quantidade de dinheiro possível, mas, essas características materialistas se forem administradas em equilíbrio e em harmonia com o universo, não será negativa. "+
				 
				"<br>LADO POSITIVO Liderança, meticulosidade, eficiente, trabalho árduo, tradição, autoridade, proteção, poder de cura, bom juízo de valores, prático, direto, seguro de si, organizado e por vezes generoso. "+
				 
				"<br>LADO NEGATIVO Intolerância, mesquinhez, excesso de trabalho, dominação, controlador, ambicioso, materialista ao extremo, violento e insensível. "+
				 
				"<br>ORIENTAÇÕES Deve tomar cuidado com ações fraudulentas, pois por ter a vibração da justiça, poderá perder o que conquistou ilicitamente e ainda ficar com má fama. Deve ter cuidado com o desejo em adquirir poder, que é naturalmente atraído por essa vibração, pois poderá levá-lo a ser inescrupuloso ou inconsequente. Como aprecia ter bom status social, precisa ser menos rígido e mais atencioso, evitando situações monótonas."+

				"<br>Precisa aprender a demonstrar seus sentimentos, expressando o quanto existe calor humano e afeto em seu ser. Terá mais facilidade em se realizar profissionalmente sendo comerciante, alto executivo, empresário ou em qualquer atividade que seja por conta própria.";
	        } else if(s7 == 9) {
	        	var es = "Expressão 9 – Generoso e humanitário "+
			"<br>O Número nove na Expressão revela um pensador nato, com grande capacidade de raciocínio, observação, compreensão e criatividade, o que o faz conhecer o âmago e qualidades de pessoas, coisas ou fatos. É misterioso, silencioso e muito ligado ao plano astral ou espiritual.  É o número da sabedoria, da virtude, da experiência, dos mistérios, da moralidade, do valor, da soberania, do amor ao próximo, da obscuridade, da proteção e dos frutos através do mérito.  É o número dos universalistas, dos generosos, dos que são sensíveis ao sofrimento alheio, que possuem alto grau de compaixão, compreensão e cuidado com o próximo. São frequentemente vistos em trabalhos voluntários ou em atividades que possam ajudar aos outros em suas evoluções pessoais, sendo comum encontrá-los como terapeutas holísticos, esotéricos ou líderes religiosos. Vivem constantemente em busca da “verdade” e se dedicam ao máximo para sempre fazer o que para ele é correto, que é amar, proteger e defender o próximo. Deve ser cauteloso e impessoal, não acreditando cegamente em todos, pois pode ter desapontamentos, decepções e aborrecimentos com pessoas próximas, como familiares e amigos, que podem lhe parecer pessoas íntegras e incapazes de atos ilícitos, mas que na verdade podem ser justamente o contrário.  Tem paixão pela perfeição, mas raramente a consegue alcançar. Sua autoconfiança é motivada por sua fé interior, devendo sempre confiar em si mesmo, a fim de não ficar inseguro ou sem autoestima.  De mente aguçada e perspicaz, consegue entender as coisas rapidamente e as utiliza em benefício próprio. Esse grau em que chegou de evolução o torna apto para enfrentar situações difíceis, contrariedades e decepções, porém, deve usar o perdão para equilibrar-se, não absorvendo isso de forma negativa. Tem um modelo de vida perfeita estabelecido e espera inspirar os outros a seguirem o seu mesmo modelo. Acredita que pode melhorar o mundo através da filantropia e filosofia, e quando investe nesse sentido, se torna impaciente quando os resultados não aparecem na hora em que deseja, precisando então entender que a evolução ocorre somente em longos ciclos dominados pelo tempo. Sua amplitude de pensamentos irá encantar a todos, por isso não deve se prender a grupos, levando sua ampla filosofia ao conhecimento de muitas pessoas, ajudando-os com seus conhecimentos. No lado financeiro, tem excelente capacidade de ganhar dinheiro, porém, essa capacidade se estende até a maneira de gastá-lo, o que o torna alguém que ganha e gasta na mesma proporção, e isso se deve a sua pouca capacidade administrativa. Mas, mesmo sendo um gastador, sempre lhe sobra dinheiro para o necessário, o que o torna alguém que sempre tem dinheiro, mesmo que pouco, mas o suficiente para honrar as despesas do dia-a-dia. Precisa adquirir o equilíbrio entre as questões materiais e espirituais, usando da sua sabedoria interior e compreensão espiritual, conquistando assim harmonia entre mundo material e espiritual. A expressão 9 mostra o mais alto e o último grau primário, que representa o término de um ciclo completo de desenvolvimento antes que o espírito inicie um novo ciclo evolutivo, ou eleve-se a outras posições. Simbolizando o final da conquista humana. Por isso deve ser tolerante, ter compaixão, amor incondicional, ser desprendido do lado material e físico. Nesse estágio evolutivo, a consciência atingiu um ponto em que acredita que pode assumir o comando de tudo sem que haja consequências, e aqui é onde se deve aprender a dosar o uso de suas capacidades. Tem aparência forte e um tanto fria, mas na verdade sente forte necessidade de receber amor, carinho, atenção e compreensão.  "+

				"<br>Nos relacionamentos é comum ser infeliz, embora seja dedicado, leal e altruísta, fazendo tudo que está ao seu alcance para fazer o outro feliz, mesmo que isso lhe seja difícil, tentará a todo custo que dê certo. O 9 é um ser que nasceu para ser livre e por isso não deve apegar-se a ninguém ou a nada. Deve apenas amar ao próximo e trabalhar em benefício da humanidade, sem esperar algo em troca. "+
				 
				"<br>LADO POSITIVO Idealismo, humanitarismo, compaixão, lealdade, altruísmo, compreensão, criatividade, sensibilidade, generosidade, sedução, caridade, desapego e popularidade.  "+
				 
				"<br>LADO NEGATIVO Frustração, indecisão, dispersão, nervosismo, individualismo, fragmentação, insegurança, egoísmo, pouca praticidade, complexo de inferioridade, apego ao passado, medos e preocupação exagerada.  "+
				 
				"<br>ORIENTAÇÕES Não deve ser egocêntrico e nem individualista, devendo buscar servir ao próximo sem esperar por retribuições ou reconhecimentos, amando-os incondicionalmente. Não deve ser vingativo ou destrutivo. Como nasceu para ser livre, deve evitar se apegar a pessoas ou coisas em demasia. Evite dominar as outras pessoas com suas opiniões, não seja crítico e tente observar as necessidades alheias. Pratique o amor, a compaixão e a caridade. Seja competitivo, mas também justo, podendo desafiar a si mesmo ou aos outros sem ser poderoso ou arrogante. Não deve se prender a velhos relacionamentos, e quando seu papel na vida daquela pessoa tiver acabado, siga em frente e dê tanto a você como a ela a oportunidade de seguirem em frente livres um do outro, sem rancores, mágoas ou ressentimentos. Pratique o perdão e a solidariedade. ";
	        } else if(s7 == 11) {
	        	var es = "Expressão 11 – Prestativo e intuitivo "+
				"<br>O Número onze na Expressão corresponde à força, poder, bravura, vitalidade, liberdade e sucesso em aventuras destemidas. É intuitivo, imaginativo, inspirado, sensível, idealista, inovador, justo, leal, compreensivo, diplomático e místico. Gosta de harmonia e paz, espalhando-as por onde passa. Sua vibração mestre faz com que enxergue nas pessoas as suas virtudes e defeitos, proeza esta que os possuidores de números simples não conseguem. Tem fé em seus ideais e dificilmente volta atrás em suas decisões.  Por ter essa vibração forte, deverá aprender através da experiência a lidar com os dois lados dessa vibração, sendo menos extremista e acreditando mais em seus sentimentos. Essa vibração também sugere que deve buscar a evolução espiritual, seja através do estudo ou prática do esoterismo, espiritismo, misticismo ou religião, a fim de evitar que se torne indolente, indeciso e sujeito à vontade alheia, sendo explorado e feito de empregado de seres inferiores a si mesmo. Como a vibração 11 é mestre, geralmente atrai inveja e conflito em sua volta, o que acaba por dificultar a conclusão de seus projetos. Essa vibração também faz com que atraia amizades e inimizades com muita facilidade. No lado profissional seu desafio é alcançar a independência financeira, porém, sem afetar sua evolução espiritual. Geralmente não se adapta ao comércio, vindo a ter prosperidade em outros segmentos, como a política, forças armadas, medicina, marketing, administração de empresas, esoterismo, líder religioso, sociólogo, psicólogo, psicanalista ou assistente social.   LADO POSITIVO Intuição, espiritualidade, prestatividade, objetividade, entusiasmo, inventividade, concentração, idealismo, expansividade, equilíbrio, inteligência, senso artístico, humanitarismo, capacidade de cura e poderes psíquicos.  "+
				 
				"<br>LADO NEGATIVO Desonestidade, falta de clareza, falta de objetivos, emotividade excessiva, magoa-se facilmente, hipersensibilidade, complexo de superioridade e dominação.  "+
				 
				"<br>ORIENTAÇÕES Precisa dar menos atenção às opiniões alheias, seguindo sua intuição e colocando seus ideais em ação. Também precisa aprender a lidar com sua forte energia e vitalidade, porém, evitando os excessos de ansiedade e sentido prático. Deverá aprender a conviver com pessoas de todos os níveis intelectuais, principalmente quando estes não o compreenderem, não o apoiarem ou até criticarem suas ações. Deve lembrar que cada um de nós está em um nível evolutivo, assim, siga seu caminho sem se importar com os que não estão no mesmo nível evolutivo que o seu.";

	        } else if(s7 == 22){
	        	var es = "Expressão 22 – Idealista e prático "+
				"<br>O Número vinte e dois na Expressão mostra que é uma pessoa que possui todas as qualidades benéficas dos outros números. É habilidoso, organizado, idealista e possui grande potencial de realização. Por ser persuasivo e perseverante, tem constância em seus objetivos, o que geralmente o faz ir até o final dos projetos que inicia. Também possui integridade moral, honestidade, disciplina técnica e social. Possui forte inspiração divina e sensibilidade para sentir o outro e o ambiente que o rodeia. Devido a todas essas qualidades, geralmente consegue atingir êxito em todos os seus objetivos, mesmo aqueles que inicialmente parecem ser impossíveis. A Expressão 22 mostra que não se adapta as situações preconcebidas, agindo geralmente ao seu modo, de acordo com o que acha certo ou justo. Detesta receber ordens, preferindo trabalhar sozinho ou em cargos de liderança. Poderá ser levado ao mundo dos negócios se for ambicioso, e graças à sua capacidade de administração e organização, poderá atingir ótimos resultados na área bancária, imobiliária, industrial e de merchandising. Seu lado idealista e inspirador o levará a gostar do segmento das importações e exportações, podendo trabalhar com viagens internacionais e ter contatos com os mais diversos tipos de pessoas. Como gosta de contribuir com o desenvolvimento do mundo em grande escala e tem gosto por construções, poderá trabalhar na área da construção civil, construindo grandes projetos como hospitais, escolas, teatros, pontes, viadutos, rodovias e etc. Seu lado imaginativo e perceptivo poderá desenvolver o gosto pelo teatro, cinema, fotografia, artes ou decoração de interiores. Já o seu lado naturalmente habilidoso e comunicativo facilita o trato com as pessoas, estimulando-o a trabalhar em profissões de contato social como a comunicação, trabalho social, trabalho humanitário, educação, advocacia e medicina. Também poderá seguir uma visão mais humanitária e altruísta, desejando usar seus conhecimentos e dons em benefício da humanidade; nesse caso, poderá trabalhar com todos os tipos de terapias holísticas, medicina tradicional e alternativa, aromaterapia, cromoterapia, aplicação de Reik e etc. Como possui persuasão e liderança, poderá atuar na área política, seja liderando partidos ou exercendo os cargos públicos, podendo chegar aos mais altos níveis dentro da carreira política. "+
				 
				"<br>LADO POSITIVO Sensibilidade, inspiração, intuição elevada, honestidade, integridade moral, disciplina, praticidade, organização, habilidade, responsabilidade, Idealismo, realismo, persuasão, perseverança, pragmatismo, universalismo, empreendedorismo, liderança, grande poder de realização, senso de direção, habilidades manuais e gosto pela construção. "+
				 
				"<br>LADO NEGATIVO Desonestidade, materialismo excessivo, ganância, egoísmo, egocentrismo, autopromoção, autoritarismo, arrogância, estupidez, preguiça, irresponsabilidade, avareza, impaciência, intolerância, nervosismo, falta de visão e envolvimento com esquemas de enriquecimento rápido ou ilícito. "+
				 
				"<br>ORIENTAÇÕES Como possui grande capacidade de persuasão e destreza com as palavras, consegue facilmente convencer a todos, graças aos seus ótimos argumentos e ideias; porém, esse seu dom deverá ser utilizado apenas com a finalidade de ajudar ao próximo e que consequentemente estará ajudando a si mesmo. Se suas qualidades forem bem canalizadas, poderá tornar-se famoso tanto nacional como internacionalmente. Precisa estar sempre agindo dentro da moral e da ética, evitando danos à sua vida em longo prazo. Deve evitar todos os tipos de vícios, principalmente o fumo.";
	        } 

	        //MOTIVAÇÂO

	        var s0 = document.getElementById("txt1").value;
	        var s1 = s0.toLowerCase();
	        var m1 = s1.replace(/[qwrtypsdfghjklçzxcvbnmñ]/gi, '');
	        var m2 = m1.split(' ');

	        var m7 = 0;

	        for(x=0; x < m2.length; x++) {

	            var m3 = m2[x];
	            var m4 = m3.split('');

	                for(y=0; y < m3.length; y++) {

	                    
	                    var m5 = m4[y];
	                    var m6 = letras[m5];
	                    var m7 = m7+m6;
	                    var m8 = m7.toString();

	                             

	                    

	                }

	                if(m8.length > 1 && m8 != 22 && m8 != 11) {

	                            var m9 = m8.split('');
	                            var m10 = parseInt(m9[0]);
	                            var m11 = parseInt(m9[1]);
	                            var m7 = m10+m11;

	                        }   

	        }

	        if(m7 == 1) {
	        	var em = "Motivação 1 – Ambicioso e líder nato "+
					"<br>O número um na Motivação mostra independência, criatividade, liderança e ambição.  Geralmente é mais intelectual, inventivo, original e pioneiro. Gosta de liderar, dirigir, dominar e por vezes, impor o que deseja, sendo obstinado e autoritário. O número 1 é pioneiro, gostando de explorar o que acha lhe parece ser interessante, não se importando com os possíveis riscos que poderá sofrer durante a busca dessa realização. É movido pela iniciativa, coragem, criatividade, lealdade e honestidade. Gosta de agir, não esperando que as coisas aconteçam por intermédio dos outros. Gosta de ser pioneiro e vencedor, destacando-se sempre em primeiro lugar no que faz. Também gosta de receber reconhecimento e elogios pelos seus feitos.  Por vezes se sente incompreensível, não aceitando conselhos, não importando quem os dê; esse fato com certeza lhe causará transtornos no futuro, principalmente à sua carreira e planos profissionais. Não gosta de receber ordens de quem quer que seja, e profissionalmente será feliz apenas em cargos de chefia ou trabalhando por conta própria. Não é detalhista e não é do tipo que fica horas numa atividade minuciosa. Também não gosta que o atrapalhem quando está fazendo algo e não aceita fazer nada sob pressão.  Caso não seja desenvolvido o bastante espiritualmente, poderá ser egoísta, vaidoso, egocêntrico e excessivamente arrogante. Acaba por ser impaciente, com pouca ou nenhuma diplomacia, sem saber lidar com os outros, não importando quem eles sejam; essa dificuldade ao lidar com os demais fará com que enfrente mais dificuldades do que a maioria das pessoas, principalmente no meio profissional, pois sua arrogância e exigência vão deixando inimizades por onde passa. Geralmente, quando a pessoa possui essas dificuldades de convívio, ela se estende até a parceira, familiares e amigos. Quando se sente inseguro, tende a ameaçar os outros, podendo até vir a agredir e ofender, se tornando irredutível, inflexível, vingativo e preconceituoso.  "+
					 
					"<br>LADO POSITIVO Criatividade, originalidade, iniciativa, independência, pioneirismo, liderança, ação, dinamismo, autossuficiência, espírito inventivo, explorador, honestidade e lealdade. "+
					 
					"<br>LADO NEGATIVO Autoritarismo, dominação, incompreensão, egoísmo, egocentrismo, vaidade, arrogância e impaciência. "+
					 
					"<br>ORIENTAÇÕES Cultura, educação e refinamento pessoal são características indispensáveis que devem ser adquiridas para o seu triunfo pessoal, profissional e principalmente afetivo.  Deve lembrar que para obter sucesso é preciso ter diplomacia e tato com os demais. Precisa compreender que da mesma forma que gosta de receber elogios e reconhecimento, os demais também gostam, passando a elogiar quem merece. Deve aprender a dar ordens sem ser ofensivo ou autoritário, conseguindo o que deseja dos outros sem ofendê-los ou ordená-los. Caso trabalhe em equipe, deve lembrar que é da união de todos que virão os resultados, portanto, elogie cada integrante da equipe pelos seus feitos, mostrando que sabe reconhecer o valor de cada um naquele projeto. Aprenda a receber conselhos, ou pelos menos, aprenda a ouvi-los, pois poderá aprender muito com eles.";
	        } else if(m7 == 2) {
	        	var em = "Motivação 2 – Compreensivo e companheiro "+
				"<br>O Número dois na Motivação mostra que você é amoroso e compreensivo, desejando o mesmo em troca. Deseja um lar cheio de amor, harmonia, companheirismo, paz e conforto. O casamento é importante para si e gosta desse compromisso afetivo. É naturalmente sensível e expressa essa sensibilidade através da suavidade, cooperação e cordialidade. É a pessoa certa para quem busca parcerias, ajuda ou apoio, pois é uma pessoa que está sempre disposta a ajudar ao próximo, não importando quem seja. Profissionalmente não gosta muito de liderar, preferindo trabalhos que envolvam cooperação e ajuda mútua; nesses casos, mesmo que o mérito seja quase sempre seu, prefere fingir que o mérito é de todos os participantes da ação, mantendo-se longe das aparições e honrarias. Por ser conservador e pacífico, prefere ouvir as ideias dos demais antes de expor as suas próprias ideias. Gosta de buscar novos conhecimentos em todas as áreas, sendo um bom pesquisador. Socialmente é bem visto por todas as pessoas, pois sabe relacionar-se bem com elas, independentemente de suas classes sociais, credo, raça ou condições financeiras. Geralmente é chamado para sociedades ou participa de grupos, pois é diplomático e participativo. Por ser gentil, calmo e aparentemente passivo, vulnerável e carente, alguns podem querer aproveitar-se de sua bondade, usando-o para benefício próprio. "+ 
				 
				"<br>LADO POSITIVO Compreensão, consideração, companheirismo, fidelidade, cordialidade, cooperação, diplomacia, bondade, gentileza, sabedoria e intuição."+
				 
				"<br>LADO NEGATIVO Excesso de sensibilidade, se magoa facilmente, dependência, hesitação, falta de iniciativa, vulnerabilidade, timidez, subserviência, desconfiança, procrastinação e egoísmo."+ 
				 
				"<br>ORIENTAÇÕES Precisa cultivar seu lado comunicativo e expressivo, principalmente no lado profissional e social. Deve buscar ser mais carismático e sociável, espalhando a paz, harmonia e compreensão. Precisa apenas ter cuidado com aproveitadores de sua boa-fé e prestatividade.";
	        } else if(m7 == 3) {
	        	var em = "Motivação 3 – Expressivo e sociável "+
				"<br>O Número três na Motivação mostra que você é amigável e sociável, gostando de diversão e de estar em ambientes rodeados de amigos, sendo o popular do grupo e o centro das atenções. Adora ser notado e ter plateia, sendo um sonhador e entusiasta do grupo, cheio de opiniões e originalidade. Seu espírito elevado o faz desejar o bem de todos, esforçando-se para fazer com que todos fiquem felizes. Ama a liberdade, sinceridade e sociabilidade. Poderá sofrer com as escolhas de amizades, pois como gosta de “aparecer”, nem todos gostam de ser essa plateia, afastando-se e evitando a continuação dessa amizade. Por ter naturalmente poderes psíquicos, deve ter cuidado com o uso dos mesmos, pois pode vir a ter desarmonia e problemas com os demais. Tem o dom da comunicação e sabe lidar bem com as palavras, porém, pode também se tornar tímido e inseguro, e em vista disso pode se isolar, ficando inibido e com dificuldades em expressar seus sentimentos. Fica feliz e satisfeito emocionalmente quando consegue compartilhar a alegria que sente com os demais, e isso o faz aprender sobre a compaixão e o amor. Nas contrariedades, pode vir a mentir, omitir ou criar histórias para livrar-se do que quer que seja. Por vezes, torna-se arredio sem explicação, o que deixa os demais confusos. "+
				 
				"<br>LADO POSITIVO Criatividade, expressividade, alegria, sociabilidade, carisma, bom humor, entusiasmo, sinceridade, inspiração, intuição e versatilidade."+
				 
				"<br>LADO NEGATIVO Timidez, contradições, insegurança, omissão, mentira, impaciência, intolerância, irritação e falta de concentração."+
				 
				"<br>ORIENTAÇÕES Como tem várias ocupações, é comum ter muitas obrigações e pouco tempo para cumprir todas, levando-o a ter muitos inícios e poucos fins. Nesse caso, deve apenas assumir compromissos que sabe que pode levá-los até o fim. Por ter um lado espiritualizado aguçado, deve estudar assuntos do gênero ou filosofia humana. Como gosta de ser o centro das atenções, deve evitar emitir opiniões complexas, como religiosas e políticas, bem como deve evitar fazer sua autopromoção. Precisa ter cuidado com os excessos de “paixões”, seja por coisas ou pessoas, pois tende a ter problemas decorrentes desses excessos. Precisa ter tempo para si, meditar, cuidar da alimentação ou do corpo, descansar ou dormir, pois vive sobrecarregado e ocupado demais para viver isso. Deve ter cautela nas escolhas das amizades, evitando contratempos ou aborrecimentos. Deve evitar o vício de comprar mais do que precisa e pode pagar. ";
	        } else if(m7 == 4) {
	        	var em = "Motivação 4 – Prático e organizado "+
				"<br>O Número quatro na Motivação mostra um ser firme, sério, conservador, realista, equilibrado, cooperativo, organizado, trabalhador, metódico, tradicional, dedicado, detalhista, perfeccionista, prático, disciplinado, obediente, obstinado, astuto, perseverante, sincero, honesto, paciente e confiável. Está sempre disposto a ajudar os outros, seja no trabalho, na vizinhança ou no seio familiar. Organizado, gosta que tudo à sua volta esteja limpo e no seu devido lugar. Gosta de respeitar regras e normas, sendo um ótimo funcionário de qualquer empresa. Por ser conservador e metódico, prefere trabalhar para os outros ou em sociedades, sendo o que executa bem qualquer ação que lhe for imposta, o que inclui fazer trabalhos repetidos ou metódicos. Não é fã das inovações, pois acredita que o trabalho já consagrado pelo tempo mostra o quanto é eficiente e mais fácil de ser executado, dada a sua experiência adquirida pelo tempo. A junção do perfeccionismo, organização e praticidade o torna um profissional dedicado à profissão, sendo visto como exemplo dentro da empresa onde trabalha, porém, nem sempre é reconhecido por tais feitos, mas, todos o veem como referência, quando o assunto está ligado ao melhor profissional ali existente. Gosta de trabalho bem executado e cobra isso de si mesmo, sendo autoexigente. Geralmente é quem mais trabalha numa empresa ou o que mais possui tarefas e responsabilidades, e impressiona os demais quando faz muitas coisas sem cansar-se facilmente. Quando trabalha em cargos que exigem bater metas periódicas, está sempre no topo da lista, pois se dedica ao máximo em qualquer atividade que exerça. Gosta de coisas palpáveis e práticas, preferindo tudo aquilo que poder ver, tocar e sentir. Está ligado ao mundo dos negócios, grandes empresas ou setor financeiro, buscando manter sua segurança e estabilidade financeira. Raramente está sem dinheiro, pois é econômico e sabe gastar corretamente o que ganha. É do tipo que poupa dinheiro por um longo período e depois o investe em algum tipo de bem. Gosta de manter uma poupança ou reserva financeira, pois tem receio de ser pego de surpresa em alguma dificuldade. Aparentemente frio, sério ou extremamente severo, não sabe demonstrar seus sentimentos, mas, é leal, honesto e confiável, estando sempre disposto a ajudar e cooperar no que quer que seja.  Valoriza a lealdade e honestidade. "+
				 
				"<br>LADO POSITIVO Cooperação, gentileza, compreensão, realismo, organização, prático, disciplinado, obediente, sincero, honesto, paciente e confiável."+
				 
				"<br>LADO NEGATIVO Teimosia, pessimismo, rigidez, falta de criatividade, queixa-se de tudo, reclama muito, é controlador e dominador, não demonstra sentimentos e é avarento."+
				 
				"<br>ORIENTAÇÕES Poderá ter ambição material após ver os resultados dos seus talentos profissionais, já que por ser organizado, responsável e perfeccionista, é muito comum receber promoções em reconhecimento dos seus esforços e em vista disso, poderá obter grande sucesso profissional, caso saiba beneficiar várias pessoas quando beneficiar-se. Precisa aprender a ser adaptável, flexível e aberto às novidades, o que poderá lhe trazer mais benefícios durante a vida. Deve evitar ser extremamente rígido, teimoso, queixoso, pessimista e controlador, aceitando as opiniões dos que não possuem tanta experiência como a sua.  Deve evitar a tendência de guardar coisas pensando que poderá precisar delas no futuro. ";
	        } else if(m7 == 5) {
	        	var em = "Motivação 5 – Versátil e habilidoso "+
				"<br>O Número cinco na Motivação mostra uma pessoa mutável, versátil, adaptável, que gosta de variedade e ter experiências incomuns. Por ser versátil, está sempre à procura de novas oportunidades, não se cansando nessa busca incessante. Possui natural curiosidade e senso investigativo, fazendo com que deseje investigar e elucidar todo e qualquer tipo de problema. Ama novidades, sentindo-se bem com tudo que é novo, moderno, atrativo e incomum. Adaptável e arguto, possui raciocínio rápido e perspicaz, sendo dificilmente enganado ou enrolado pelos outros. Socialmente é bem comunicativo, amigo, festeiro e versátil, adaptando-se a todas as ocasiões e assim consegue fazer muitos amigos por onde passa, sendo sempre muito bem-vindo em todos os lugares e situações. Graças a sua versatilidade, criatividade e talento, consegue se sair bem em todas as funções ou atividades, assim, para ser feliz profissionalmente, precisa trabalhar em atividades que possuam movimento, evitando que se frustre com atividades repetitivas. Sua facilidade de adaptação o faz vivenciar novas situações e experiências com tranquilidade, mantendo suas atitudes progressistas. Com sua eficiência e habilidade, consegue aprender rapidamente o que for necessário, como também capta as situações com sua abordagem realista. Como precisa estar em constante movimento, as viagens e mudanças são fundamentais em sua vida. "+
				 
				"<br>LADO POSITIVO Versatilidade, adaptação, boa comunicação e sociabilidade, criatividade, raciocínio rápido, inteligência, grande habilidade e eficiência, sorte, ousadia, amor pela liberdade, espirituosidade, curiosidade, sociabilidade e misticismo.  "+
				 
				"<br>LADO NEGATIVO Entedia-se com facilidade, inquietação, falta de confiabilidade ou confiança extrema, mutação, procrastinação, inconsistência, libidinosidade e teimosia.  "+
				 
				"<br>ORIENTAÇÕES Devido a sua natural inquietação, por vezes não conclui o que inicia, pois tem tendência a perder o interesse com facilidade e assim, abandona muitas coisas pela metade; neste caso, deve-se aprender a terminar o que começou, sendo perseverante. Deverá adquirir os conhecimentos através do estudo prático experimental, ativando assim as suas fortes inclinações psicológicas e filosóficas. Para ser feliz precisa evitar a introspecção e falta de comunicação. ";
	        } else if(m7 == 6) {
	        	var em = "Motivação 6 – Amoroso e idealista"+ 
				"<br>O número seis na Motivação mostra o amor e a família como partes fundamentais de sua existência. Possui simpatia, intuição, persistência, compaixão, humanitarismo, idealismo, criatividade e visão ampla, buscando sempre a harmonia pessoal e social. É geralmente equilibrado e muito responsável, gostando de organização e ordem. Seu lar geralmente é aconchegante e acolhedor, organizado, alegre, com bons móveis, objetos de arte, plantas e animais. Possui gosto refinado e gosta de estar no conforto e na elegância. Dá valor à família e conquista facilmente a popularidade e êxito social devido ao seu jeito carismático de ser. Gosta de criar raízes e por isso não é alguém que deseja mudar de casa com frequência. Se possível, quer que todos estejam ao seu redor, pois assim, sabe que poderá cuidar deles. Aprecia família grande e unida, sendo o conciliador de todos. Geralmente é conselheiro e conciliador, e por ser prático e confiável, além de auxiliar os familiares em épocas difíceis, ainda o faz com os amigos e até conhecidos, que lhe procuram em busca de conselhos. Vê a presença do amor em tudo e gosta de admirar tudo que cresce, produz e se expande, apreciando constantemente o milagre da vida. O seu lado idealista faz com que deseje orientar e consertar o que estiver errado no mundo, querendo ver todos alegres e em harmonia. Gosta de música, artes e boa comida, saindo-se bem na culinária. Gosta de ser insubstituível e amado pelos mais próximos. Não gosta de pedir favores e nem de trabalhos mecânicos e repetitivos. Por vezes, atrai relacionamentos afetivos complicados, que deixam marcas profundas em seu ser. "+
				 
				"<br>LADO POSITIVO Idealismo, criatividade, intuição, persistência, responsabilidade, praticidade, compaixão, humanitarismo e popularidade. "+
				 
				"<br>LADO NEGATIVO Excesso de sentimentalismo, desconfiança, pouca fé, egoísmo, vaidade, mesquinhez, dominação e manipulação. "+
				 
				"<br>ORIENTAÇÕES Deve buscar o autoconhecimento e aceitar que possui limitações, equilibrando seus sentimentos e pensamentos. Precisa ter cuidado com a vaidade e o egoísmo, pois podem trazer sérias decepções e desapontamentos. É bom que estude os temas metafísicos, herméticos, espirituais e holísticos, pois neles encontrará a solução para muitos dos seus problemas. Precisa respeitar a opinião alheia, deixando de querer que todos vejam e/ou ajam como você. Deve entender que seu zelo ou excesso de cuidados podem vir a sufocar os outros, privando-os de experimentarem novas experiências. Exercite a compaixão e compreensão. ";
	        } else if(m7 == 7) {
	        	var em = "Motivação 7 – Intuitivo e arguto "+
				"<br>O Número sete na Motivação mostra que você prefere ficar sozinho, explorando seu eu interior no mais íntimo e profundo de sua essência. Vive em constante busca da perfeição, destacando-se em seu meio profissional, pois é extremamente exigente consigo mesmo.  7 é o número da espiritualidade, fazendo-o ter intuição e percepção refinadas, isso faz com que perceba ou veja o que para os outros ainda é imperceptível, podendo até desenvolver alguma forma de contato extra-sensorial. Deseja obter vitórias intelectuais, gosta da profundidade, de intelecto aguçado, de gente inteligente, tornando-se alguém que não gosta de pessoas comuns ou medíocres.  Tem gosto refinado e admira o refinamento, gosta de exclusividade, adora a sabedoria e vive na busca incessante por mais conhecimento, tendo grande capacidade mental e racional. Tem autoridade especializada, possui distinção única, gosta da perfeição profissional, tem valores interiores invejáveis, possui senso de espiritualidade aguçada, tem consciência da fé filosófica e reconhece a herança cultural existente.  É um ser misterioso e místico, pois gosta de estudar e conhecer todas as vertentes existentes de todos os temas, incluindo os temas místicos e esotéricos. Tem grande curiosidade, o que o faz ser muito observador, gostando de pesquisar e descobrir o porquê de todas as coisas.  Gosta de conforto físico e privacidade, preferindo ficar sozinho e em silêncio, com tranquilidade, calmaria, sossego e paz, isso o faz ser feliz, sonhar, fazer planos e meditar. Ama sua liberdade e não aceita que lhe tirem isso.  Integridade e justiça são duas características marcantes da Motivação 7, o que o faz ser contra qualquer tipo de injustiça, levando-o a defender os fracos, oprimidos e injustiçados. Como adora achar explicações para tudo que existe, busca compreensão filosófica, psicológica, espiritual, Cármica e física das coisas, tentando a todo custo explicar tudo racionalmente, analisando, criticando e tirando suas próprias conclusões, com certa frieza e distância.  Tem dificuldades em tomar decisões e se decidir sobre algo, e por vezes pede orientação e opinião de outras pessoas, para poder assim chegar às suas próprias conclusões. Pode vir a exigir muitas explicações e comprovações sobre seus questionamentos até chegar às suas conclusões, porém, aprende tudo com facilidade e é dotado de uma excelente memória. Para ter harmonia conjugal deve evitar ciúmes infundados, excesso de exigências e não atribuir culpas desnecessárias à parceira. Deve pensar bem antes de assumir uma relação séria, analisando bem se existe total compatibilidade com a outra pessoa, pois caso haja incompatibilidade, isso resultará numa separação em breve, haja vista estará insatisfeito com a relação desarmoniosa. "+
				 
				"<br>LADO POSITIVO É autossuficiente, perfeccionista, estudioso, possui sabedoria além da normal, tem sede de conhecimento, é justo, honesto, inteligente, sábio, tranquilo, calmo e educado. "+
				 
				"<br>LADO NEGATIVO É tímido em público; é muito emotivo, mas não demonstra seus sentimentos; detesta receber ordens; é indeciso, introspectivo, silencioso, arredio, ríspido, intransigente, excessivamente questionador e inseguro. Quando essa insegurança o aflige, tende a se isolar, ficando calado, quieto e isolado. "+
				 
				"<br>ORIENTAÇÕES Deve evitar cigarros, álcool e drogas, pois todos são verdadeiros venenos para seu organismo.   Viverá feliz se estiver vivendo próximo à água, que pode ser um lago, um rio ou o mar. Para obter êxito nas relações conjugais deve buscar compreender seus próprios anseios e ver se existem compatibilidades com a pessoa amada, evitando desgastes por falta compreensão ou gostos diferentes. Deve, ainda, lembrar que a outra pessoa também precisa de atenção, carinho e cuidados.  Deve tentar ser mais comunicativo, carismático e extrovertido, principalmente em público. ";
	        } else if(m7 == 8) {
	        	var em = "Motivação 8 – Astuto e analítico "+
				"<br>O Número oito na Motivação mostra que você nasceu para o mundo dos negócios. É a vibração do poder e sucesso financeiro; geralmente tem sob seu domínio o mundo empresarial. É inteligente, intelectual, analítico, equilibrado, arguto, observador, determinado, justo, honesto, inspirado e conservador.  Normalmente possui muita ambição, desejando o poder, o sucesso e a riqueza; devido a isso, dispõe de forte motivação e determinação, fazendo com que permaneça sempre em busca de seus objetivos.  Possui o dom para os negócios, tem espírito de liderança, é eficiente e possui visão ampla, fazendo da organização e planejamento suas aliadas para se obter o sucesso.  É respeitado por seus valores, sabendo usar seus instintos para enfrentar os impasses diários sem muitos alardes ou desesperos, lutando contra tudo que possa vir a deter-lhe em seus objetivos. Gosta de acumular bens materiais e financeiros, sentindo orgulho de todas as suas conquistas. Geralmente sente facilidade em tomar decisões importantes, já que possui mente astuta, sendo capaz de avaliar bem todas as pessoas e situações envolvidas. Quando o assunto é financeiro, tem maior cuidado ao fazer suas considerações ou fazer negócios, usando sempre do bom discernimento e bom juízo de valores. Por ter grande habilidade de organização e liderança, consegue estar à frente de grandes empreendimentos com maestria, o que significa que o sucesso será certo. Por ter determinação e senso de realização, dá o máximo de si para concluir seus projetos. Quando obstáculos aparecem, usa de sua inteligência e astúcia para contorná-los, de forma que opositores se transformem em colaboradores. Não costuma ter muitos amigos, mas os poucos que possui têm sua amizade e lealdade, fazendo por eles o que estiver ao seu alcance. Sua ambição natural por bens materiais e dinheiro o faz ser autoritário e dominador. Tem tendência a se ofender quando não lhe ouvem. "+
				 
				"<br>LADO POSITIVO Inteligência, honestidade, justiça, lealdade, organização, inspiração, observação, equilíbrio, liderança, coragem, determinação, força de vontade e organização. "+
				 
				"<br>LADO NEGATIVO Intolerância, dominação, impaciência, guardar rancor, não perdoar, humilhar pessoas inferiores, ter falta de determinação e fazer julgamentos errados. "+
				 
				"<br>ORIENTAÇÕES Precisa cultivar a persistência, a determinação e o senso analítico. Precisa agir com diplomacia, tolerância e paciência. Deve aprender a perdoar os outros. Também precisa aprender a compreender os outros, considerando suas fraquezas e incapacidades, evitando assim fazer julgamentos das mesmas. Deve evitar humilhar ou menosprezar pessoas inferiores para esconder sua insegurança.  Precisa aprender a não controlar a vida dos outros, deixando-os viver livremente, aprendendo as lições da vida através de suas próprias experiências.";
	        } else if(m7 == 9) {
	        	var em = "Motivação 9 – Espirituoso e conselheiro "+
				"<br>O Número nove na Motivação mostra que você chegou ao ápice da realização intelectual e espiritual. É uma pessoa que vive em busca do conhecimento, gostando de compartilha-los, seja ensinando, aconselhando ou servindo à humanidade. É uma pessoa magnética, carismática, perceptiva e dotada de habilidades psíquicas, que por vezes é desconhecida, e caso tome ciência dessas habilidades, terá grandes realizações pessoais.  O 9 é um número universalista, o que não estranha que tenha uma vontade incessante em ajudar ao próximo. Possui forte intuição, podendo ter percepções não físicas, e que geralmente são imperceptíveis aos outros. Sente necessidade de receber amor e carinho, embora não demonstre isso. Deseja a igualdade de todos, usando de sua boa vontade para fazer um mundo cada vez melhor. Embora goste de elogios, sabe que suas atitudes altruístas e humanitárias são mais valiosas que os aplausos pelos seus feitos. É geralmente impessoal e sem interesses materialistas, porém, quando não existe um desenvolvimento espiritual, pode tornar-se vaidoso, gostando de ser elogiado pelos seus feitos. Tem generosidade, compreensão e grande capacidade de imaginação, podendo vir a se iludir ou frustrar-se emocionalmente quando percebe que não obtêm a compreensão de suas ideias elevadas. Esse impasse também ocorre no meio profissional, desejando obter essa compreensão dos colegas de trabalho e superiores, porém, a incompreensão também os atinge, fazendo com que se frustre e desista de suas ideias brilhantes e geniais. É uma pessoa destemida, que não teme nada nem ninguém, passando por cima dos obstáculos da vida com maior facilidade, destreza e maestria. Inspiração, idealismo, compaixão e fraternidade são parte de si, e com isso é uma pessoa geralmente sem qualquer tipo de egoísmo. Quando sente insegurança, tende a usar os outros como forma de sentir-se a vítima. Pode vir a manipular pessoas, caso se encha de egocentrismo, achando-se o próprio Deus na terra.  "+
				 
				"<br>LADO POSITIVO Gentileza, generosidade, altruísmo, carisma, compreensão, idealismo, percepção, magnetismo pessoal, grande capacidade de aprendizado, imaginação e inspiração elevados. "+
				 
				"<br>LADO NEGATIVO Insegurança, vitimismo, alienação, paranoia, fanatismo, dissimulação, apatia, solidão, isolamento, introspecção, depressão, negligenciar a vida afetiva, manipulação, falta de concentração e falta de persistência. "+
				 
				"<br>ORIENTAÇÕES Por ser uma pessoa literalmente do mundo e para o mundo, deve viajar o máximo possível, conhecendo novos lugares, novas pessoas e novas culturas; caso não consiga fazer isso, pode vir a tornar-se uma pessoa solitária, introspectiva, desanimada, isolada e até depressiva. Precisa abrir-se mais intimamente com os mais próximos, mostrando-lhes seus reais interesses, evitando assim ser sempre vítima da incompreensão. Caso se relacione afetivamente, precisa deixar de colocar a vida afetiva em segundo ou até terceiro plano, o que acarretará em um relacionamento frustrado e cheio de discussões. Poderá atingir fama e sucesso, desde que consiga expressar intimamente seus sentimentos aos que lhe rodeiam. Precisa deixar o sentimento constante de ser aceito no meio social ou familiar, forçando às vezes passar a melhor imagem de si. Deve ter cuidado para não cair no fanatismo, pois como enxerga o mundo de forma peculiar, geralmente acredita ser possuidor da verdade suprema universal. Precisa dominar a falta de concentração e persistência, aproveitando assim todas as oportunidades que lhe surgirem.";
	        } else if(m7 == 11) {
	        	var em = "Motivação 11 – Visionário e intuitivo "+
				"<br>O número onze na Motivação mostra um ser idealista, inovador, visionário e cheio de inspiração. É corajoso, talentoso, compreensivo, sábio, intuitivo, sensitivo e por vezes, clarividente. Possui habilidades de liderança e deseja obter reconhecimento e prestígio. Normalmente é atraente, tanto na parte pessoal como em sociedade, atraindo a atenção de todos, conquistando facilmente a simpatia e popularidade por onde passa. Essa vibração também indica o desejo pela evolução espiritual e o desenvolvimento pessoal, tendo como desafio o autodomínio e equilíbrio entre o lado material e espiritual. Somente através da experiência é que conseguirá aprender a lidar com os dois lados de sua natureza e assim desenvolver uma atitude menos extremista, confiando mais em seus próprios sentimentos. Deseja um mundo melhor e sente interesse pelas necessidades universais. Aprecia coisas refinadas, a gastronomia e as artes; prefere mais qualidade em vez de quantidade. É destemido, e enfrenta com coragem e determinação os eventos inesperados que lhe surgem. Deseja estar rodeado de pessoas que o admirem, fazendo prevalecer seu ponto de vista e opiniões, porém, não se importa ou dá valor às ideias ou opiniões alheias. É um ser um tanto contraditório, já que é bastante oscilante; gosta de ver suas ideias prevalecendo, mas, por vezes, torna-se conciliador, conseguindo manter a harmonia nos mais diversos grupos, expondo assim os seus dons diplomáticos. Quando é desorganizado, consegue manter uma espécie de ordem em meio à sua desordem. Gosta da harmonia entre as formas, dos métodos persuasivos, da elevação moral das coisas e pessoas e de tudo que tem sentido superior.  É extremamente vulnerável em sua sensibilidade e embora não aceite isso, magoa-se profundamente com fatos tão superficiais e fúteis, vindo a sofrer por pequenos detalhes do cotidiano. Quando se sente inseguro, tende a ficar emocionalmente instável e sem rumo, ficando nervoso, inquieto, avarento, negligente com o lado material, egocêntrico, distante, vago, dispersivo, paranoico, depressivo e desatento às necessidades dos outros.  "+
				 
				"<br>LADO POSITIVO Idealista, inovador, visionário, corajoso, talentoso, compreensivo, sábio, intuitivo, sensitivo, atraente, popular, humanitário e conciliador. "+
				 
				"<br>LADO NEGATIVO Nervoso, inquieto, egocêntrico, avarento, indisciplinado materialmente e financeiramente, dispersivo, distante, paranoico, depressivo, desorganizado e arrogante. "+
				 
				"<br>ORIENTAÇÕES Dotado de forte intuição e capacidades psíquicas, é importante que desenvolva sensibilidade suficiente para compreender e seguir seus pressentimentos, não se importando com as ideias preconcebidas já existentes ou dando atenção aos conselhos alheios, seguindo apenas sua intuição. Deve evitar ser arrogante ou calculista, principalmente quando se sente inseguro financeiramente. Precisa aprender a expressar seus talentos únicos, revelando o seu verdadeiro potencial criativo e inovador. Deve aprender a ser autodisciplinado e organizado, melhorando assim o cotidiano, seja em casa ou no trabalho. Precisa aprender a não levar tudo que dizem para o lado pessoal, evitando magoar-se facilmente com futilidades. ";

	        } else if(m7 == 22){
	        	var em = "Motivação 22 – Diplomático e habilidoso "+
				"<br>O número vinte e dois na Motivação mostra uma pessoa reservada e preocupada com os bens materiais. É honesto, idealista, realista, inspirado, habilidoso, cordial, paciente, diplomático, prático e organizado. É carismático e tem profunda compreensão do outro, entendendo duas motivações mais íntimas. Geralmente culto, vive para o mundo e tem muitos amigos e admiradores. Gosta do belo, das artes e da cultura. Possui grande poder de realização, graças aos seus dons naturais de organização e ordem. Por vezes demonstra seu lado carinhoso e afetuoso, mas, é muito carente e necessita de atenção, afeto, carinho e amor. Geralmente se preocupa com o bem-estar e segurança de todos, porém, sem perder seu ponto de vista realista e pragmático. A vibração do número mestre 22 mostra um alto nível de percepção do mundo, e isso o faz desejar contribuir para evolução mundial de alguma forma, o que inclui tanto evolução espiritual como material, haja vista o 22 gosta de grandes construções que beneficiam a todos. É muito comum ver grandes construtores com a vibração 22 dentre seus números pessoais. Trabalhador honesto, possui grande capacidade de liderança, sendo bem-sucedido em cargos de chefia, liderando ou incentivando pessoas, seja em empresas, grupos partidários, religiosos ou sindicais. Se tiver determinado, poderá atingir o sucesso e a fortuna, mas, precisará de ajuda e encorajamento das companheiras de jornada. Quando se sente inspirado, torna-se dinâmico e motivado, sentindo a necessidade de se expressar e progredir. Possui grande capacidade de resistência e perseverança embutida em sua personalidade, precisando ativá-los em momentos de estresse ou difíceis. Poderá, mesmo que inconscientemente, se deixar levar pelos sentimentos dos outros, esquecendo-se de si mesmo. Normalmente é entusiasmado e generoso, mas, pode ser também egoísta e arrogante."+ 
				 
				"<br>LADO POSITIVO Otimismo, intuição, inspiração, harmonia, espiritualidade, capacidade de administração, universalismo, visão ampla do futuro, idealismo, autoexpressão, dons artísticos, praticidade, habilidade, honestidade, coragem e organização. "+
				 
				"<br>LADO NEGATIVO Ganância, exploração, rancor, ressentimento, corrupção, manipulação, arrogância, egoísmo, individualismo, materialismo excessivo, destruição e complexo de inferioridade. "+
				 
				"<br>ORIENTAÇÕES Confie mais no seu potencial e invista nos seus projetos e metas, dando o melhor que existe em si. Se levar uma vida elevada, poderá sentir-se insatisfeito, tornando-se antipático, crítico e arrogante, por isso deverá cultivar a compreensão, determinação e persistência. Por outro lado, precisa trabalhar em benefício da humanidade, porém, não deverá esquecer de si mesmo. Precisa encontrar o equilíbrio em tudo que faz, obtendo assim a harmonia. ";
	        } 

	        //IMPRESSÂO

	        var s0 = document.getElementById("txt1").value;
	        var s1 = s0.toLowerCase();
	        var i1 = s1.replace(/[aáàäâãeéèëêiíìïîoóòöôõuúùüû]/gi, '');
	        var i2 = i1.split(' ');

	        var i7 = 0;

	        for(x=0; x < i2.length; x++) {

	            var i3 = i2[x];
	            var i4 = i3.split('');

	                for(y=0; y < i3.length; y++) {

	                    
	                    var i5 = i4[y];
	                    var i6 = letras[i5];
	                    var i7 = i7+i6;
	                    var i8 = i7.toString();

	                        if(i8.length > 1) {

	                            var i9 = i8.split('');
	                            var i10 = parseInt(i9[0]);
	                            var i11 = parseInt(i9[1]);
	                            var i7 = i10+i11;

	                        }                

	                    

	                }

	        }

	        if(i7 == 1) {
	        	var ei = "Impressão 1 – Confiante e ousado "+
				"<br>O Número um na Impressão mostra um ser que se destaca dos demais, sendo geralmente o líder e o que manda mais do que obedece, passando sempre a impressão de ser superior. A liderança é sua marca pessoal, sendo visto como alguém que patrocina novas ideias, que podem ser suas ou não. Sua aparência sólida e autoconfiante faz com que lidere e dirija os outros com facilidade e maestria, sendo sempre o escolhido para liderar os grupos dos quais faz parte, já que mostra ser um vencedor por natureza. Coragem, determinação, ousadia, originalidade, integridade, lealdade e justiça são qualidades que expressa através da forma de falar, vestir, se comportar e na forma com que trabalha. A persistência é a sua fórmula contra o desanimo, fazendo com que consiga o que deseja, mesmo que seja aparentemente inviável; por ter essa persistência acentuada, poderá ser teimoso, egoísta, obstinado e até opressor, porém, isso é uma forma de garantir a realização do que deseja. Tem forte potencial e habilidades executivas e de liderança, que podem ficar mais intensas, caso resolva investir em trabalhos de especialização, gerenciamento, administração e na carreira militar ou política.  Pode ser enérgico, agressivo, arrogante, autocentrado, egoísta, egocêntrico e extremamente direto, sem gostar de rodeios e indo diretamente ao assunto. Se frustra quando os outros não acreditam ou duvidam de seus propósitos. Pode cuidar bem da sua própria imagem e dependendo de sua personalidade, pode usar seus dons em benefício próprio, criando uma imagem perfeita para atuar no meio social. Pode ter visões um tanto distintas da maioria em relação ao amor e aos relacionamentos, o que poderá causar incompreensão."+ 
				 
				"<br>ORIENTAÇÕES Por ser um líder nato, deverá evitar que essa liderança o torne um ditador, autoritarista, autocentrado, dono da verdade e que pensa que o mundo gira em torno de si. Precisa ter cuidado com os gostos gastronômicos, pois como gosta de comer bem, com o passar do tempo pode gostar de exagerar nas quantidades, levando à obesidade após os 50 anos.";
	        } else if(i7 == 2) {
	        	var ei = "Impressão 2 – Paciente e compreensivo "+
				"<br>O Número dois na Impressão mostra um ser paciente, sensível, gentil, compreensivo, cooperativo, tranquilo, modesto, justo e responsável. É um ser que deseja amor, paz, harmonia, prosperidade, carinho e amizade para si mesmo e para todas as outras pessoas. Gosta de tranquilidade, calmaria, legitimidade, esclarecimento e inspiração; gostando também de se sentir compreendido e confortado. É um conciliador habilidoso, tanto em assuntos de seu interesse, como também nos interesses alheios. "+
				"<br>É atraente e popular com o sexo oposto. É uma pessoa simples e natural, que não faz questão de se exibir ou ostentar o que possui, seja entre a família, amigos ou meio social, sendo um apreciador nato da discrição, o que o faz vestir-se bem sem ter que chamar a atenção. É calmo, gentil e agradável, o que desperta nos outros o sentimento de confiança e segurança. Passa a impressão de ser tímido, ardoroso, idealista, calado, pacífico e diplomático. Essa sua aparente timidez o faz ser visto como um bom seguidor, já que sua inclinação pessoal é a de sempre esperar que outra pessoa tome a iniciativa ou lhe mostre o que fazer, porém, é um ser confiante e capaz de superar suas próprias inibições. Mostra ser indefeso e parece ter dificuldades em tomar decisões. Pode tornar-se dependente, na tentativa de agradar aos que gosta. Não gosta de ficar sozinho, buscando sempre estar próximo a outras pessoas, passando a ideia de estar sempre incompleto em si mesmo. Quando fica sozinho, vive com a cabeça nas nuvens, sendo um sonhador.  Mostra ser subjugado, porém, é alguém que também é preocupado com o bem-estar e harmonia dos outros. Para agradar a parceira é capaz de abrir mão de seus desejos pessoais, mesmo que venha a se arrepender depois. "+
				 
				"<br>ORIENTAÇÕES Para nossa sociedade uma pessoa simples é vista como uma pessoa fracassada, sem iniciativa ou acomodada, nesse caso, evite ser visto assim, aprendendo a ser dinâmico, criativo, inovador e arrojado. Precisa ter autoconfiança, agindo por si só, conquistando assim seus objetivos sem a intervenção dos outros. Não tenha medo de arriscar em coisas diferentes, achando que pode errar ou fracassar, pois sem tentar fazer algo é certeza de que não haverá nenhum resultado. Procure estar em movimento, buscando novidades e evitando assim a monotonia ou estagnação.";
	        } else if(i7 == 3) {
	        	var ei = "Impressão 3 – Atraente e criativo "+
				"<br>O Número três na Impressão mostra um ser alegre, jovial, atraente, elegante, popular, amistoso, social, expressivo e criativo, gostando de ser notado e aplaudido por seus feitos, o que não seria estranho, afinal, realmente possui dons artísticos que o faz ser admirado por todos. Por ser altamente criativo, é comum expressar-se em alguma forma de arte ou mesmo através da fala em contatos sociais, onde pode expressar seus sentimentos e ideias originais. Tem personalidade forte, é justo, profundo e alegre; vive cheio de esperanças, felicidade e gosta da filantropia. Geralmente é charmoso, sensível e de imaginação fértil, precisando manter equilíbrio entre essas três qualidades para atingir seus propósitos de vida. Embora possua ótimos relacionamentos, tenha bom-senso de humor, seja criativo, charmoso e elegante, deve evitar preocupações ou inseguranças emocionais, evitando a baixa-estima que pode lhe ocorrer. É sincero, emitindo sempre suas opiniões ou seu ponto de vista, e por vezes parece ingênuo ou infantil, mas também tem forte poder de persuasão e entusiasmo, convencendo os outros sobre seu ponto de vista.  "+
				
				"<br>Jovial, alegre e divertido, é assim que você é visto pelos demais, mesmo com idade avançada, sendo do tipo de pessoa que nunca envelhece, pois mostra estar sempre jovem e disposto. Pode cometer exageros no gosto pessoal ou no contrário, ser desleixado na forma de vestir-se. Quando exposto ao ódio ou paixões, perde o equilíbrio e o senso de justiça, acreditando que está correto em suas ações ou sentimentos. Frustrado, é comum que tenha crises de baixa autoestima. "+
				 
				"<br>ORIENTAÇÕES Deve evitar preocupações excessivas sobre projetos futuros. Deve evitar também os aborrecimentos e os constrangimentos. Os sentimentos acima podem causar problemas do coração ou fígado, evite-os! ";
	        } else if(i7 == 4) {
	        	var ei = "Impressão 4 – Responsável e prático"+ 
				"<br>O Número quatro na Impressão mostra uma pessoa trabalhadora, responsável e organizada. É o número do entendimento, ordem, organização e praticidade. Geralmente é uma pessoa rígida, segura de si, forte, objetiva, disciplinada, conservadora, trabalhadora e digna de confiança. É detalhista, organizado, natural ao andar, possuindo gestos simples e graciosos. Possui habilidades práticas, forte energia, disposição e muita determinação, que se forem bem utilizadas, resultará em projetos sempre bem-sucedidos. Na maioria dos casos é a pessoa responsável pela produção da empresa onde trabalha, responsável pelo apoio que dá aos amigos ou o responsável pela própria família, sendo quem às vezes a sustenta psicologicamente e financeiramente também. Por ser forte, acaba aguentando mais situações difíceis que a maioria, sendo um exemplo de superação e força de vontade. É uma pessoa simples, comedida e econômica, porém, gosta de apreciar a boa música, a gastronomia e as artes. Geralmente veste-se elegante, porém, num estilo mais clássico e discreto, sem muitos acessórios chamativos ou cores e tecidos extravagantes. Para sentir-se bem consigo mesmo e realizado, precisa de estabilidade, ordem e organização. É bom ouvinte, estando sempre interessado nas conversas alheias, mas, quando estas lhe parecem sinceras e concretas. Por vezes, é extremamente sincero, o que poderá trazer desavenças, afinal, nem todos têm a capacidade de ouvir verdades. "+
				 
				"<br>ORIENTAÇÕES Deve evitar bagunça, desordem e desorganização. Como geralmente é o responsável pela família, deve ser independente e empreendedor, colocando as ideias em ação ao invés de apenas pensar sobre elas e que resultados lhe trariam; não tenha medo das ideias que lhe surgirem, mesmo que pareçam ser loucas, pois podem ser a chave de muitas resoluções. Deve evitar o excesso de autoridade e não querer controlar a vida dos outros, deixando que cada um siga o caminho que lhe for mais apropriado, afinal, cada um tem seu próprio livrearbítrio. Cuidado com o excesso de sinceridade, pois pode trazer transtornos desnecessários. Precisa ficar atento à gula, pois poderá sofrer de obesidade. ";
	        } else if(i7 == 5) {
	        	var ei = "Impressão 5 – Sociável e ousado "+
				"<br>O Número cinco na Impressão mostra uma pessoa versátil, sociável, agradável, cativante e magnética. Intuitivo, consegue sentir o sentimento e caráter alheios. Sociável, é sempre bem-recebido em reuniões e festas. É charmoso por natureza e consegue atrair muitas admiradoras e amantes. Possui forte versatilidade e adapta-se facilmente as novidades e inovações, estando sempre em contato com as novidades e lançamentos que surgem frequentemente. Essa sua versatilidade também o influencia a buscar essas novidades antecipadamente e por vezes gosta de descobrir, criar e ditar modas novas. Sua aparência jovial e alegre fará com que chegue à idade avançada com o mesmo semblante juvenil e atualizando, parecendo que a idade para você não sofre as influências do tempo. Sua ousadia e entusiasmo o fazem sair em busca de sensações e experiências novas, sentindo que o mundo não cessa em oportunidades para sua apreciação. Embora seja muito sociável e amigo, também faz inimizades com facilidade, porém, sua astúcia e esperteza são eficazes contra as armadilhas ou enganos dos inimigos que possui. Como um amante das novidades e aventuras, gosta de viajar e sonha em conhecer o mundo inteiro, experimentando assim cada novidade. Gosta de viver com liberdade e prefere viver sem vínculos ou muitas responsabilidades, pois estas o reprimem e o deixam frustrado. "+
				 
				"<br>ORIENTAÇÕES Embora goste de liberdade é importante que saiba dosá-la com responsabilidade. Por ser magnético e atrativo fisicamente, deverá ser seletivo na escolha das amizades, parceiros de negócios e parceiras afetivas. Como existe um grande desejo pelo novo e desconhecido, deve evitar envolver-se em vários relacionamentos afetivos simultaneamente. ";
	        } else if(i7 == 6) {
	        	var ei = "Impressão 6 – Atraente e romântico"+
	        	"<br>O Número seis na Impressão mostra um ser agradável, amistoso, elegante, atraente e por vezes encantador. É do tipo paternal, desejando ter uma família unida e perfeita, uma casa grande e vistosa, bem arrumada e aconchegante, que estará sempre de portas abertas para receber visitantes queridos. O 6 passa a impressão de preocupação com os demais e, por vezes, acaba por esquecer-se de si mesmo. Gosta de se colocar no lugar das outras pessoas, enxergando as coisas como elas enxergam e, assim, consegue tirar suas próprias conclusões sobre os fatos, baseando-se nesse ponto de vista; porém, agindo dessa maneira, poderá acabar envolvendo-se mais do que deveria nos assuntos alheios. Por sua natureza amorosa, acredita que conhece intimamente o coração dos demais, sendo frequentemente visto falando da vida dos outros, como se conhecesse seus sentimentos profundos. Tem uma aparência de professor ou instrutor, que está sempre disposto a ensinar e ajudar no que for preciso. Naturalmente sociável, deixa sempre os outros bem à vontade em sua volta. "+

					"<br>Por ser o 6 o número do amor, passa a impressão de conforto e segurança de um pai, atraindo pessoas em busca de atenção, que precisam de conselhos ou que querem adquirir conhecimentos. Devido ao seu bom senso equilibrado, consegue observar tudo em sua volta individualmente e ao mesmo tempo como parte de um todo, podendo ter conclusões diferentes dos demais ali envolvidos. Por ser extremamente leal, poderá se sacrificar pelos que ama. É intimamente romântico e sentimental, esforçando-se sempre para manter harmonia e equilíbrio nos relacionamentos, porém, mostra-se autoritário quando é preciso. Geralmente é passivo e convencional sexualmente, mas, quando fica inseguro se torna dominador. Procura sempre agradar a parceira e suas atitudes são reflexos das atitudes dela. O número do amor na impressão também pode atrair paixões violentas e desenfreadas, inúmeras relações afetivas durante a vida ou excesso de apego aos prazeres materiais. Por vezes será contraditório, pois o 6 tanto promove harmonia como também atrai confusão. É o número da virtude e do amor puro e simples, mas também é o número da sedução, dos vícios e das incertezas no casamento. Tem forte senso de responsabilidade, gosta de segurança, seja material ou sentimental. Possui nobreza interior natural, que é vista principalmente quando ocupa posições de grandes responsabilidades ou liderança. Quando tem liberdade de ação no lado profissional, dá o melhor de si, encarando sempre o trabalho com seriedade, dedicação e responsabilidade. "+
					 
					"<br>ORIENTAÇÃO Precisa aprender a lidar com a solidão, já que odeia ficar sozinho. Deve atuar em grupo para atingir maiores resultados, evitando jogos de poder. Em situações difíceis, deve examinar todos os fatos da situação antes de agir ou tomar decisões, pois caso resolva agir precipitadamente, pode tomar decisões erradas e de difíceis resoluções. Por ser naturalmente generoso e até ingênuo, deve aprender a dizer “não”, pois corre o risco de ser explorado por pessoas que não merecem sua generosidade e tão pouco merecem o valor que você dá a elas. Por ser uma pessoa de caráter, pode vir a ter desapontamentos, pois acredita que os demais também têm bom caráter. ";
	        } else if(i7 == 7) {
	        	var ei = "Impressão 7 – Sincero e enigmático "+
				"<br>O Número sete na Impressão mostra uma pessoa próspera e geralmente é vista assim. Os antigos atribuíam ao número 7 o triunfo do espírito sobre a matéria, o que torna esse número ligado ao lado espiritual e religioso. O 7 é também o número da sabedoria e é comum que goste de leitura e conhecimentos gerais. Por gostar de adquirir conhecimentos é provável que possua muitos livros e goste de ser consultado pelos demais, que o veem como um sábio. Gosta de paz, tranquilidade, beleza e silêncio. É honesto, sincero, exigente, expressivo, sóbrio, centrado, distinto e sutil, não sendo do tipo que gosta de aparecer ou ser o centro das atenções. Por ser sensível e ter sentimentos intensos e profundos é comum que aprenda a relaxar buscando ser alegre, evitando que sua mente fique sobrecarregada em situações de estresse. "+
				 
				"<br>Como possui aparência mística e enigmática, é comum que adquira simpatias pelo seu jeito misterioso de ser, porém, mesmo obtendo certo sucesso social, prefere seu lar, suas coisas e sua tranquilidade. Poderá ser solitário, principalmente se o gosto pela leitura ou meditação for acentuado. Gosta de elogios e estar entre amigos, mas, geralmente isso ocorre em breves espaços de tempo, não sendo a pessoa que vive em festas ou jogando conversa fora. Todavia, se encontra um grupo que goste de assuntos científicos, místicos, esotéricos ou religiosos é provável que não se queixe das longas horas gastas em diálogos produtivos. Tende a ser enigmático e até dissimulado quando faz perguntas sutis aos outros sem mostrar o que está sentindo ou pensando naquele momento. "+
				 
				"<br>ORIENTAÇÕES Precisa compreender e aceitar os outros como eles são, sem tentar mudá-los com seus conselhos e pontos de vista. Deve evitar fazer críticas ou calúnias a quem quer que seja. Deve evitar a solidão e isolamento, principalmente se conviver com a própria família. ";
	        } else if(i7 == 8) {
	        	var ei = "Impressão 8 – Imponente e dinâmico "+
				"<br>O Número oito na Impressão mostra uma pessoa influente e imponente. Tem raciocínio rápido, vivo e perspicaz; gosta da ordem, organização e praticidade, mesmo que tenha modos calmos e equilibrados. Possui personalidade dinâmica, autoritária, justa, séria; tem discernimento, julgando e tomando decisões corretamente. Gosta de ser notado, mostrando estar sempre bem financeiramente, sendo visto como abastardo, porém, controlado, pois sabe gastar seu dinheiro com prudência. É geralmente atraente e mostra ser uma pessoa dominante, mas se preocupa com a impressão que causa nos outros, deixando um ar de superioridade, respeito e ao mesmo tempo de mistério.  Nos relacionamentos, gosta de dominar, mas em troca oferece sua lealdade e generosidade. Geralmente gosta de relacionamentos práticos, porém, aprecia parceiras atuantes e recíprocas. Possui uma mente altamente criativa e cheia de vigor, que o impulsiona em busca de novas realizações. Tem grande capacidade executiva, que se for bem aproveitada, poderá atingir grandes cargos de liderança ou chefia no mundo dos negócios, já que possui naturalmente o dom da liderança. Seu local de trabalho é sempre um ambiente agradável, prático e eficiente, possuindo todas as coisas necessárias para o bom funcionamento e desenvolvimento profissional. Possui certa sensibilidade para perceber quando algo sai da harmonia ou equilíbrio, mas nem sempre se envolve na situação para regularizá-la. Tem uma capacidade incrível para lidar com pessoas e fazer contatos, porém, isso não significa que irá misturar-se a elas, pois gosta de separar bem o lado profissional do pessoal. É naturalmente dramático, não gostando de receber críticas ou obedecer aos outros. Tem oscilações de humor, certas horas é atencioso e caloroso e noutras horas é frio e indiferente. Possui muito amor próprio, e quando ferem seu ego, mostra-se mal-humorado e tem repulsa das brincadeiras. "+
				
				"<br>ORIENTAÇÕES Deve sempre priorizar a ordem e organização. Deve evitar que sua aparência arrogante ou superior, venha a fazer os outros se sentirem menosprezados. Também deve evitar a ostentação, exibicionismo e extravagâncias. É importante que estude misticismo, esoterismo e espiritismo, pois encontrará várias respostas às suas perguntas. Para ser mais feliz consigo mesmo, faça trabalhos humanitários, isso fortalecerá seu espírito. ";
	        } else if(i7 == 9) {
	        	var ei = "Impressão 9 – Compreensivo e determinado "+
				"<br>O Número nove na Impressão mostra um uma pessoa com aparência imponente e segura, de personalidade marcante, sábia, bondosa, compreensiva e ponderada. É impessoal e por isso observa e dá atenção a todos igualmente. Possui charme natural e poderá ter aparência jovem, mesmo na maturidade, caso goste de cuidar da parte estética. Determinado, quando se propõe a fazer algo dá o máximo de si, atingindo resultados inimagináveis. Seu lado humanitarista é ávido por servir, ajudando a todos que lhe procuram em busca de apoio, já que consegue ter a compreensão do sofrimento alheio e com isso pode oferecer conforto e bons conselhos. Sente-se realizado quando se esforça em resolver os problemas alheios, oferecendo-lhes carinho, compreensão e amizade sincera. Da mesma forma que atrai amizades por onde passa, também consegue fazer antipatias, pois nem todos o veem como uma pessoa de bom coração, haja vista poderá parecer excessivamente seguro de si com sua aparência imponente e invencível. Possui uma mistura de curiosidade investigativa e rara inteligência, tornando-o um ser visionário em excelência, que busca através da observação, análise e estudo, esclarecer ou desvendar todos os tipos de situações e problemas incompreendidos pela natureza ou humanidade. Devido ao seu gosto pela compreensão de tudo, geralmente detêm um vasto conhecimento nas mais variadas áreas e assuntos, mesmo sendo alguém que não teve educação suficiente. Com tantos predicados, é alguém que inspira confiança em todos que o conhecem, sendo um guia que aconselha a muitos. Por ser humanitarista e compreensivo, ser sociável e prestativo são qualidades natas, por isso poderá atuar na vida pública ou apenas se dedicar aos assuntos que promovam o bem da humanidade. "+
				 
				"<br>ORIENTAÇÕES Não aceita ter seus desejos limitados ou reprimidos, e, caso isso ocorra, tende a se comportar de forma agressiva, rebelde, intolerante e instável, o que deve ser evitado, já que essas atitudes lhes causarão apenas danos. Precisa aprender a se adaptar as novas ou difíceis situações que lhe surgem, sendo mais flexível e menos orgulhoso ou egocêntrico. Deve aprender a esquecer o passado, vivendo o presente e visionando o futuro. A cor preta deverá ser evitada, principalmente durante o dia. ";
	        }

	        //Dia do nascimento

	        var d0 = document.getElementById("txt2").value;
	        var d2 = d0.split('-');

	        var d7 = 0;

	        for(x=0; x < d2.length; x++) {

	            var d3 = d2[x];
	            var d4 = d3.split('');

	                for(y=0; y < d3.length; y++) {

	                    
	                    var d5 = parseInt(d4[y]);
	                    var d7 = d7+d5;
	                    var d8 = d7.toString();

	                        if(d8.length > 1 && d8 != 22 && d8 != 11) {

	                            var d9 = d8.split('');
	                            var d10 = parseInt(d9[0]);
	                            var d11 = parseInt(d9[1]);
	                            var d7 = d10+d11;

	                        }                

	                    

	                }

	        }

	        if(d7 == 1) {
	        	var ed = "O Número 1 no Destino mostra um ser pioneiro, que tem iniciativa, grande capacidade de liderança e comando, tem o espírito executivo e é dotado de uma mente inventiva. Essas características unidas a essa vibração do 1, geram um ser que normalmente obtêm êxito e prosperidade em quase todas as atividades que exerce. "+
				"<br>O 1 de Destino necessita de reconhecimento, gosta de brilhar e obter sucesso em tudo em sua vida, e para obter isso, dá o máximo de si, não se importando em trabalhar exaustivamente, atingindo assim melhores posições, cargos ou destacando-se por sua excelência em sua área de atuação. Tem ideais firmes, desejos concretos, forte poder de iniciativa, tem mente desperta, gostando de cumprir seus deveres com perfeição, o que o torna um ser que está sempre apto para ocupar cargos de grande responsabilidade, liderança e chefia. "+
				"<br>Nada vem fácil demais para você, e para não frustrar-se com aborrecimentos, o melhor é sempre confiar apenas em você mesmo e em seus próprios recursos, evitando assim que as soluções venham dos demais. É comum que os outros venham te pedir alguma orientação sobre algo, pois seu dom de liderança atrai os que precisam de apoio, conselhos ou querem apenas uma opinião mais experiente. "+
				"<br>LADO NEGATIVO Como nasceu para liderar, caso não consiga cargos de liderança ou chefia, deve optar por trabalhos individuais, pois não gosta de receber ordens. É um ser individualista, íntegro e honesto em seus propósitos, mas precisa aprender a ser pioneiro, a trabalhar em grupo e a ser o comandante, não o ditador. Precisa aprender a ouvir conselhos, analisar situações e, somente após meditar sobre o assunto, deve então tomar decisões, não agindo precipitadamente e erroneamente. "+
				"<br>ORIENTAÇÕES Seu destino consiste em desenvolver a sua individualidade, independência e capacidade de liderança. Porém, sua capacidade criativa às vezes pode se tornar em excesso de ânimo, surgindo naturalmente a arrogância, o caráter dominador e certo egoísmo, o levando a achar que o sucesso do grupo dependeu exclusivamente de você. Nesse caso, esse tipo de postura pode tornar difícil o convívio com os amigos e colegas de trabalho, além de dificultar o relacionamento a dois, pois não é nada fácil de conviver com você achando que é sempre o dono da verdade ou da supremacia.";
	        } else if(d7 == 2) {
	        	var ed = "O Número 2 no Destino mostra um ser dotado de grandes qualidades para associações, parcerias, uniões, juntar ideias, contribuindo para realizações de quaisquer projetos. Consegue com facilidade assimilar as ideias dos demais, agregando valores as mesmas e colocando-as em prática de forma totalitária, gerando um sentimento de satisfação em todos os envolvidos. É protetor e gosta de proteger todos à sua volta, sejam amigos ou colegas de trabalho. Já no meio familiar, é excelente pai ou mãe, protegendo todos os membros da família com satisfação. É naturalmente um ser diplomático e consegue deixar os outros à vontade. Por ser gentil em sua maneira de se expressar e ter modos normalmente refinados, acaba atraindo os demais, sendo bem sucedido caso haja associações. Tem geralmente um bom relacionamento com todos e possui facilidade em harmonizar intrigas ou divergências entre os demais, pois sabe usar bem seus dons mediadores e diplomáticos. Qualquer trabalho que necessite de convicções, fidelidade pessoal, compreensão da natureza humana e desejo altruístas, serão desenvolvidos com eficiência por quem tem um Destino 2. "+
					"<br>LADO NEGATIVO Por vezes, prefere esperar que os outros tomem a iniciativa, parecendo ser acomodado. Essa espera o torna quase invisível, o que não é bom, já que normalmente é quem vai levar os projetos a diante em conjunto com os demais. Essa falta de iniciativa impede que excelentes oportunidades na vida sejam abraçadas e conquistadas, perdendo as chances de grandes realizações pessoais. "+
					"<br>ORIENTAÇÕES Deve evitar o comodismo, correndo atrás dos seus objetivos, sem esperar por milagres ou por alguém que lhe ajude em suas dificuldades. Mas, se precisar de ajuda, vá buscá-la. Não espere que pessoas venham até você com as soluções que precisa. Aprenda a ter paciência, esteja disposto à cooperar, seja leal com todos e com você mesmo. Como seu principal atributo é a união, deve observar quais pessoas querem essa união realmente, pois corre o risco de incentivar parcerias que só são feitas por sua iniciativa e não por vontade dos demais. Deixe que os envolvidos tomem suas decisões sozinhos e só invista no projeto quando perceber que existe vontade de todos os envolvidos. Aprenda a ouvir e seguir orientações alheias. Mas antes, medite bem sobre suas decisões, escolhendo o que for melhor para todos. ";
	        } else if(d7 == 3) {
	        	var ed = "O número 3 no Destino mostra a sociabilidade. É um ser criativo, sociável, versátil, dinâmico, alegre e talentoso. Tem personalidade charmosa e habilidade para promover suas ideias. Possui o dom artístico em todas as suas manifestações, seja falando, escrevendo, representando, pintando, esculpindo ou em qualquer outra forma de arte. Já nasceu com a criatividade em si, e deve aprimorar esse lado artístico, que lhe gerará bons frutos. Também deve buscar os contatos sociais, afim de aumentar seu poder de comunicação. Deve ainda expressar suas ideias e sentimentos através da comunicação ou algum tipo de arte. Tem o dom da comunicação e sabe se expressar muito bem através da palavra. Deve aproveitar esse dom da oratória para atingir o sucesso, pois além de ter o dom da comunicação, consegue mostrar suas emoções e sua criatividade através dela, expressando-se facilmente, o que o torna próspero. Tem facilidade de fazer crescer e multiplicar qualquer coisa que faça, então, dedique-se com afinco ao que deseja e obtenha êxito! Tem grande capacidade executiva, podendo ser bem sucedido em qualquer área de atuação onde tenha contato com pessoas, já que sua comunicação é seu ponto forte. Para obter os resultados e recompensas que deseja, deve dedicar-se ao trabalho com determinação, atingindo assim ótimos resultados. "+
					"<br>LADO NEGATIVO É vaidoso, inseguro, impaciente, exagerado, extravagante e esbanjador. Fica facilmente entediado, não gosta muito de cumprir com horários e por vezes despreza pessoas com o nível inferior ao seu. Caso seu lado negativo se manifeste, vira um ser completamente insociável, entediado e disperso, levando-o a ter crises nervosas e preferindo o isolamento. "+
					"<br>ORIENTAÇÕES A comunicação é seu dom primordial, juntamente com sua capacidade de sociabilidade farão você atingir sucesso mais facilmente. Embora seja charmoso, artístico e com bom senso de humor, deve buscar sempre manter a autoestima, evitando sentimentos de preocupação ou insegurança emocional. Por ser sociável, deve ser mais seletivo nas amizades, buscando ter melhores amigos no lugar de muitos. Também deve controlar o excesso de atividades cotidianas e sua necessidade de movimento.  ";
	        } else if(d7 == 4) {
	        	var es = "O número 4 no Destino mostra a conquista. É um ser que precisa trabalhar muito, com fé, foco, dedicação e determinação. Deve trabalhar incansavelmente, afim de garantir uma vida financeira, afetiva e social estáveis. É um daqueles que sabe que para ele nada vem fácil, e por isso deve dar o máximo de si, pois tudo que consegue através desse esforço normalmente dura pela vida inteira. Por gostar de se dedicar profundamente em seus projetos e objetivos, e por se dedicar muito profissionalmente, quase sempre conquista o que deseja, obtendo o sucesso através do próprio esforço. Consegue dar a segurança e estabilidade a tudo e a todos que dependem dele. Por vezes, lhe falta confiança, paciência e disposição para servir, e deve aprender a cultivar isso. É sensível, cheio de ideias criativas, possuindo um bom senso de visão. Também tem potencial para se expressar, mostrando facilmente seus conceitos originais e cheios de inspiração. Esse fator pode vir a ajudá-lo, caso precise superar possíveis preocupações vindas de instabilidade financeira ou ajudando a tomar decisões importantes corretamente. Prefere qualidade em tudo e em todos, o que o faz ter poucos amigos, porém sinceros. Prefere qualidade e não quantidade. "+
					"<br>LADO NEGATIVO Como o 4 representa a conquista, qualquer situação que lhe transmita insegurança, incerteza ou possibilidades de perdas é automaticamente evitada, evitando assim novas oportunidades. Esse seu lado inflexível, conservador e seguro, torna seu convívio em grupo extremamente difícil, sem falar do seu perfeccionismo exagerado, cobrando muito de todos em sua volta, sejam eles familiares, amigos ou subordinados, o que o torna chato e incompreendido. Deve evitar levar uma vida negativa, pois tem tendência a se inclinar por assuntos fraudulentos e conspirações. Podendo ainda criar ou se envolver em planos astutos e maléficos, de enriquecimento rápido e ilícito, tudo às custas do sofrimento alheio. Também pode desenvolver orgulho demasiado no seu lado negativo. "+
					"<br>ORIENTAÇÕES Para evitar altos e baixos na vida, deve praticar a justiça, ser ponderado e ajudar a terceiros, sempre que a oportunidade aparecer. Busque desenvolver seu senso de responsabilidade moral, mantenha o equilíbrio no poder que exerce e aplique corretamente seus conhecimentos em todos os seus projetos e realizações.";
	        } else if(d7 == 5) {
	        	var ed = "O número 5 no Destino mostra o movimento. É um ser que busca novidades, mudanças, viagens e novos conhecimentos. Tornam-se versáteis quando se trata de mudar, alterar ou transformar algo. Está sempre em busca de novidades e conhecimentos, gostando de aprender e conhecer coisas novas, é atraído pelo moderno, diferente e inovador. Sua curiosidade e discernimento o levam a buscar constantemente novos conhecimentos, fortalecendo assim o seu lado intelectual. Por ser comunicativo, articulado, inteligente, receptivo e alegre, é sempre bem-vindo onde chega. Pode ser confundido com um ser irresponsável, justamente por estar sempre de bem com a vida, no entanto, é apenas uma falsa impressão que por vezes emite. Mesmo sendo sociável e amigável, prefere fazer suas coisas sozinho, gostando de enfrentar novos desafios. Gosta também de exercitar sua inteligência, preferindo estar ao lado de pessoas inteligentes. Gosta de desafios intelectuais, testando assim seus próprios conhecimentos, porém, quando não consegue obter êxito nessas disputas, fica facilmente irritado e mal-humorado. "+
					"<br>LADO NEGATIVO Sentimentalmente é atraído por relações novas e intrigantes. Por vezes, se envolve em situações afetivas, das quais não consegue se desligar. No lado financeiro, tem mania de comprar mais coisas do que necessita, o que o leva a ter problemas financeiros, justamente por não poder pagar pelo tanto de coisas que compra inutilmente. No lado pessoal, tem problemas em manter o foco e dedicação em seus objetivos, o que o leva a iniciar muitas coisas e finalizar poucas. "+
					"<br>ORIENTAÇÕES Como admira pessoas independentes e poderosas, que o enfrente com ideias e opiniões próprias, não se intimidando com sua personalidade vigorosa, é interessante que sua parceira ideal seja assim.  Aprenda a desenvolver o poder de seleção e análise, aproveitando as experiências para se aperfeiçoar e elevar seu caráter, evitando assim que aspectos negativos venham a atrapalhar seu desenvolvimento pessoal. Deve buscar ser mais humano e altruísta, evitando interesses pessoais, sexuais ou materiais. Como tem a facilidade de perder o foco e motivação das coisas, deve fixar-se num objetivo e levá-lo até o fim, aprendendo a lidar com projetos e metas a longo prazo e deixando de viver apenas o agora. Deve evitar a desordem e a bagunça, e caso as encontre pelo caminho, mude-as imediatamente, pois o universo não conspira em favor da desordem. Como adora conversar, deve preferir atividades ou profissões onde possa ter contato com o público.";
	        } else if(d7 == 6) {
	        	var ed = "O número 6 no Destino mostra um ser amoroso e sentimental. Costuma ser gentil, educado, dócil, amável, calmo, tranquilo, idealista, atencioso e com grande sentimento de compaixão. Torna-se mais atraente para os demais graças ao seu charme, personalidade forte e amabilidade. O 6 é o número do amor, do lar e da harmonia. É perfeccionista, humanitário, amoroso e responsável. É compreensivo, encorajador e também ambicioso. Geralmente adora crianças, plantas e animais. Gosta de viver em paz e harmonia. Por ser amável e gentil, normalmente obtêm êxito nos seus relacionamentos afetivos. Tem disposição para fazer tudo pelas pessoas que gosta. Detesta brigas, desentendimentos e mal entendidos. Não gosta de aglomerações ou excesso de festividades. "+
					"<br>LADO NEGATIVOS É extremamente sentimental e vulnerável. Acredita demais nas pessoas, confiando nelas por sua aparência e não por suas atitudes. Costuma ser acomodado, tentando manter sempre a paz e tranquilidade, porém, certas situações precisam de atitudes enérgicas, o que lhe contraria. Nesses casos, age de forma amável e dócil, o que não resolve tais situações, levando-o à cedo ou tarde voltar a ter tais  aborrecimentos novamente. Gosta de estar de bem consigo mesmo, e busca um ambiente tranquilo para se sentir assim. Tem fácil desinteresse pelas coisas, precisando ser constantemente incentivado para poder conseguir concluir o que inicia. "+
					"<br>ORIENTAÇÕES Por ser o Destino da liderança e responsabilidade, precisa aprender a lidar com situações ou condições desarmoniosas, deve defender suas próprias ideias, servir com alegria e assumir fardos alheios. Para atingir suas metas, deve ter perseverança, determinação e paciência, evitando a acomodação. Por ser amável, gentil e educado, consegue fazer amizades facilmente, devendo aproveitar esse seu carisma e simpatia para ser bem sucedido trabalhando com o público. ";
	        } else if(d7 == 7) {
	        	var ed = "O número 7 no Destino mostra sabedoria. É normalmente um ser que busca o conhecimento aprofundado das coisas, entendendo melhor as coisas da vida. É inteligente, esperto, mentalmente ágil, perfeccionista, eficiente, meticuloso, concentrado, racional, reflexivo, reservado, intuitivo, compreensivo e amoroso, mesmo que não demonstre nenhum desses sentimentos altruístas. Prefere conhecer a essência das coisas, não se satisfazendo com as aparências, o que o leva a sempre buscar o lado oculto das pessoas e das coisas. Por sentir a necessidade constante de ter consciência sobre si próprio, gosta de fazer pesquisas, reunindo informações importantes e interessantes para si. Também se interessa por ler e escrever assuntos espirituais ou metafísicos. Seu jeito reservado ou enigmático pode o levar a ser mal interpretado pelos demais. "+
					"<br>LADO NEGATIVO Tende a ser excessivamente perfeccionista, exigente, crítico, dominador, impaciente, angustiado, orgulhoso e aparentemente descrente. Embora seja prático, realista e objetivo, pode vir a ter ideias pouco convencionais. Por vezes, não sabe valorizar as pessoas como elas são, não respeitando o fato de que elas sejam o fruto de suas próprias observações, aprendizados e lições de vida. "+
					"<br>ORIENTAÇÃO Deve aproveitar sua inteligência para buscar aperfeiçoamento naquilo que o agrada, pois tende a ser excelente nas coisas que faz com determinação. A vibração do 7 traz sabedoria, porém, também traz solidão. A pessoa deve buscar desenvolver seus poderes mentais, estudar temas universalistas e meditar, usando essa inteligência, poder e habilidade de liderança para ser bem sucedido em qualquer área profissional, pois devido às suas capacidades, facilmente obtêm êxito no que desenvolve. Devido as suas qualidades, pode dedicar-se a desenvolver trabalhos espirituais, para contribuir com a evolução do planeta. Também pode ser escritor, pesquisador, religioso ou advogado. Seja mais tolerante, escute e aceite situações adversas ou contrárias às suas opiniões de vez em quando. Use seus dons apenas para o bem e evolução pessoal e social. ";
	        } else if(d7 == 8) {
	        	var ed = "O número 8 de Destino mostra o materialismo. É o Destino do ganho financeiro e material. Tem ótima capacidade de planejamento, organização, gostando de levar à frente qualquer tipo de negócio. É inteligente, sensível, individualista, justo, disciplinado, econômico, elegante, honesto, amigo, bom negociante e possui personalidade exigente. Também é ambicioso, vigoroso, corajoso e leal aos seus ideais, sendo gentil e generoso com os que ama. Como seu lema é a objetividade, é determinado e focado no que deseja. Caso não seja herdeiro, raramente passa por problemas financeiros, graças ao seu empreendedorismo. Gosta de pensar grande, devido as suas habilidades e necessidade de crescimento. Curioso e confiante, gosta de fazer suas coisas sozinho. "+
					"<br>LADO NEGATIVO Por ser um destino materialista, é comum estar o tempo todo sendo impulsionado a fazer atividades que lhe gerem renda. Esse excesso de situações ligadas ao ganho de dinheiro e conquistas materiais, o torna um ser distante da família, do meio social, do lado sentimental, chegando a esquecer-se de si próprio. Esse seu lado materialista o torna aparentemente frio nos relacionamentos em geral, o que o faz ter dificuldades em expressar afeto, carinho ou sentimentos. É emotivo, embora não pareça ser, pois é pouco compreendido pelos mais próximos. Normalmente é teimoso, o que o torna impaciente e inquieto. "+
					"<br>ORIENTAÇÕES Deve aprender a dar atenção as pessoas, principalmente as próximas e a si próprio. Deve evitar ostentar o que possui, evitando todo tipo de infortúnio, seja por cobiça ou por acreditarem que não precisa de ninguém para nada. Como tende a ter indecisões e incertezas nos seus relacionamentos emocionais, precisa aprender a superar isso, aproveitando melhor o seu lado sociável, sua necessidade de expressão  e sua inteligência rápida. Precisa aprender a lidar com os ganhos materiais, a acumular e usar corretamente o que ganha e aprender a usar o poder que possui de forma coerente. Pode aproveitar sua forte capacidade executiva para ser executivo de grandes empresas, advogado, professor, político, conselheiro, vendedor (por conta própria) ou atuar em missões religiosas.";
	        } else if(d7 == 9) {
	        	var ed = "O número 9 no Destino mostra a universalidade. É uma pessoa espirituosa, amorosa, divertida, charmosa, tolerante, gentil, generosa, liberal, benevolente, ponderado e sensível emocionalmente. Tem uma mistura interessante de materialismo e idealismo, o que o faz desejar ser sempre bem-sucedido. Possui forte intuição e poder psíquico, podendo usar isso positivamente no caminho espiritual, caso isso o inspire. Possui a necessidade de auxiliar a tudo e a todos, não fazendo distinções nesse sentido. É muito emotivo e sentimental, preocupando-se com todos ao seu redor, fazendo o possível para que todos fiquem bem. "+
				"<br>LADO NEGATIVO Perde excelentes oportunidades na vida, principalmente profissionais, pois vive para o mundo. É pouco prático, meio egoísta, tem complexo de inferioridade, medos, preocupações exageradas, gosta de isolamento, fica frustrado facilmente e experimenta dias amargos. Por vezes, pode ficar reservado, ocultando sentimentos profundos, que podem se transformar em ressentimentos no futuro, mesmo sendo uma pessoa generosa e idealista. "+
				"<br>ORIENTAÇÕES Deve aprender a amar o próximo, ser generoso, tolerante e compreensivo com seus semelhantes. Deve, ainda, aprender a livrar-se dos preconceitos. Precisa servir e se divertir. Sente a necessidade de superar desafios, com a tendência a ser excessivamente sensível e passível de instabilidade emocional. Deve buscar sonhos realistas e dentro de sua capacidade de realização, evitando sonhos fantasiosos ou fora de sua realidade. Por ser um ser universalista, deve buscar contato com pessoas de vários círculos sociais, se beneficiando com a troca de conhecimentos e experiências, podendo ainda fazer viagens internacionais com esse intuito. Tem grande capacidade em adquirir conhecimentos e pode ser bem sucedido principalmente no meio esotérico ou espiritualista, no meio acadêmico, nas artes plásticas de modo geral, nas áreas de advocacia, psicologia, medicina ou literatura.";
	        } else if(d7 == 11) {
	        	var ed = "O número 11 no Destino mostra a inspiração. São pessoas altamente sensíveis e intuitivas, possuindo não só a facilidade de ver a realidade atual, mas também seus desdobramentos, enxergando longe. É objetivo, concentrado, prestativo, expansivo, intuitivo, inspirador, espiritualizado, humanitário, psíquico e com habilidades de cura. Podem se tornar excelentes profissionais quando se especializam em uma área específica. São sensíveis, idealistas, normalmente enérgicos, com grandes poderes mentais para autodisciplina, concentrando-se em seus objetivos. É versátil e imaginativo, precisando expressar seu poder emocional e criativo. Normalmente obtêm sucesso através de sua perseverança e compostura. Inspiração, idealismo e inovação são importantíssimos para um destino 11. É a combinação perfeita entre confiança e humildade, que o desafia para seguir trabalhando sempre em busca de sua independência espiritual e financeira. "+
				"<br>LADO NEGATIVO Normalmente sofrem com nervosismo e impaciência. Tem tendência a vícios, magoa-se facilmente, é hipersensível, excessivamente emotivo, tem complexo de superioridade, falta de objetivos, de certo modo egoísta, podendo tornar-se desonesto, quando quer conseguir algo que não conseguiu como queria honestamente. Por ser altamente sensível, consegue captar com maior intensidade as imperfeições das pessoas e do mundo, e com isso vai acumulando sofrimentos e insatisfações alheias, devendo usar isso para melhorar seus conceitos sobre tudo e todos. "+
				"<br>ORIENTAÇÕES Como possui certos atributos que os demais não possuem, deve usá-los para melhorar a própria vida e a dos demais, melhorando assim também o nosso planeta. Deve aprender a exigir menos das outras pessoas, pois elas não precisam fazer ou compreender tudo igual à você. Deve evitar o excesso de preocupação consigo mesmo e aprender a trabalhar com os demais, mesmo que precise de liberdade para agir de forma independente. Quando combina sua habilidade, praticidade e imaginação, pode obter resultados extraordinários. Precisa confiar na própria intuição, ter fé e investigar o misticismo, mantendo a humildade e servindo de inspiração para os demais através do seu exemplo.";

	        } else if(d7 == 22){
	        	var ed = "O número 22 no Destino mostra sabedoria. Também é o número do mestre construtor que se dedica altruisticamente à humanidade. É prático, altamente intuitivo, orgulhoso, honesto e trabalhador. Tem capacidade natural para liderança, possui carisma e compreende profundamente as pessoas e suas motivações. Essa vibração faz as pessoas serem normalmente precoces em todas as atividades que desenvolvem, sejam de cunho mental, espiritual, social ou material, conhecendo a vida de forma superficial, profunda e até invisível, sendo eficaz para atuar na área do ensino. Apesar de ser reservado, muitas vezes tem uma preocupação atenciosa e protetora com o bem-estar das pessoas, mas nunca perde de vista a sua posição realista e pragmática. É em geral culto e mundano, tem muitos amigos e admiradores. Os que são mais competitivos, podem alcançar o sucesso e a fortuna com a ajuda e o encorajamento dos amigos e familiares. É também charmoso, talentoso, comunicativo e diplomata natural, pode seguir carreiras nas áreas de vendas, promoções, agências ou de relações públicas, podendo se dedicar ao mundo das comunicações, área editorial, política, educação, medicina e, principalmente, à área holística, ajudando a humanidade. Além de todos estes dons, ainda possui facilidade de entender e desenvolver processos de alta magia, entendida como uma força extrafísica e não como uma forma racional. "+
				"<br>LADO NEGATIVO Tende a ser arrogante, egoísta, preguiçoso e nervoso. Tem tendência a se autopromover, a menosprezar os outros e a traições. "+
				"<br>ORIENTAÇÕES Precisa aprender que justiça, cooperação e serviço prestado também fazem parte do cotidiano. Precisa aprender a penetrar nos problemas, até às suas últimas motivações de seus atos e as verdadeiras razões de seu proceder. Apesar de emocional e materialmente generoso, pode, às vezes, radicalizar, deixando-se levar por uma vida de luxo e glamour. Se cair no escapismo e se recusar a amadurecer, precisará aprender a ser responsável e a ter uma perspectiva mais madura. Porém, quando faz algo de que realmente gosta, é capaz de trabalhar arduamente e, com dedicação e perseverança, pode se realizar e ser bem-sucedido. Está destinado a ser Líder, pela sua capacidade executiva que se estende por vasto campo, atingindo mesmo as fronteiras internacionais. No tocante à Magia, a mesma poderá ser construtiva ou destrutiva; o que semear, colherá!";
	        } 

	        // Dia do Nascimento

	        if(d2[2] == 1) {
	        	var edn = "Dia de Nascimento 1 – Dia da Liderança "+
				"<br>Liderar é seu lema! Criatividade, originalidade e inventividade fazem parte de sua personalidade forte. Gosta de elogios e admiração, embora não demonstre isso. Tem raciocínio lógico e rápido, e é capaz de discutir sobre os mais variados assuntos, até mesmo aqueles que conhece superficialmente. Tem tendência ao autoritarismo, possessividade e egocentrismo, por isso, deve sempre cultivar a visão ampla e a concentração, pois no afã de chegar logo aos objetivos, tem dispersão e envereda por caminhos tortuosos, perdendo grandes oportunidades. Raramente a pessoa do dia 1 demonstra afeto e compaixão, sendo considerada fria, calculista e pouco comunicativa, embora nem sempre seja assim. Quando seus projetos ou desejos não se realizam ou são frustrados, o seu sistema metabólico sofre em demasia e os nervos e a pressão arterial são sobrecarregados, podendo causar graves danos ao organismo. Como líder, sente enorme frustração quando tem de ocupar uma posição subalterna, gostando muito mais de mandar em vez de ir fazer, o que não significa que tenha preguiça, mas, que prefere dar ordens a ter que recebê-las. Quando lhe contrariam, pode sofrer com uma insuportável irritabilidade, agindo inconsequentemente e, por vezes, partir para a violência física ou verbal. Devido a essa personalidade extremamente forte, pode perder o convívio com os que ama ou admira, pois sua personalidade ditatorial afasta as pessoas. Precisa aprender a observar, estudar, projetar e manter a consistência nos seus objetivos, pois tem tendência a deixar tudo pela metade ou deixando que os outros assumam a conclusão em seu lugar. "+
				 
				"<br>LADO POSITIVO Liderança, criatividade, caráter progressista, vigor, otimismo, fortes convicções, competitividade, independência, sociabilidade.  "+
				 
				"<br>LADO NEGATIVO Arrogância, egoísmo, ciúme, antagonismo, egoísmo, excesso de orgulho, hesitação, impaciência.";
	        } else if(d2[2] == 2) {
	        	var edn = "Dia de Nascimento 2 – Dia da Diplomacia  "+
				"<br>É diplomata por excelência! Quando a família ou o grupo que está próximo entra em desarmonia, é quem chega para trazer a paz e devolver a harmonia, o que geralmente ocorre por conta de seu dom natural em fazer reconciliações. Sua cooperação é uma marca registrada e viver ajudando os outros é algo comum em seu cotidiano. Passividade, timidez, vulnerabilidade e sensibilidade são comuns em quem nasce no dia 2, e dependendo de suas outras vibrações pessoais, isso pode ser mais evidente ou não. Embora não seja a pessoa que toma frente nas ações, já que prefere agir cooperando, consegue manter a atenção aos detalhes de seu ambiente e, devido a isso, pode chegar com opiniões valiosas sobre qualquer situação. Afetivamente é comum envolver-se em relacionamentos complicados, o que pode trazer muitos descontentamentos afetivos ao longo da vida. Por ser uma vibração de união, manter um relacionamento afetivo ou um casamento é algo fundamental em sua vida, porém, somente sentirá paz e tranquilidade quando encontrar alguém que seja compreensível e compartilhe dos mesmos ideais. Profissionalmente, destaca-se melhor nas atividades em que possa mostrar suas habilidades pessoais, principalmente quando possui funções já atribuídas. Por ter natural passividade, qualquer atividade em grupo lhe é favorável, pois sua cooperação e carisma contagia a todos. Geralmente é incapaz de ferir os sentimentos alheios, sendo quem dá o apoio aos demais nas horas difíceis, porém, se não tiver desenvolvido seu lado espiritual, poderá agir contrariamente, usando de atos inescrupulosos para atingir seus objetivos, o que inclui também a crueldade e violência. Um de seus maiores defeitos é subestimar suas capacidades e aptidões, o que acabada por lhe colocar abaixo de pessoas com capacidades inferiores às suas. "+
				 
				"<br>LADO POSITIVO Gentileza, tato, boas parcerias, receptividade, intuição, consideração, harmonia, em princípio agrada a todos. "+
				 
				"<br>LADO NEGATIVO Desconfiança, falta de objetividade, subserviência, excesso de sensibilidade, emotividade, egoísmo e tendência a desonestidade quando não consegue atingir os objetivos pela maneira correta, ou seja, honestamente.";
	        } else if(d2[2] == 3) {
	        	var edn = "Dia de Nascimento 3 – Dia da Popularidade  "+
				"<br>Ser popular é sua marca registrada! Possui um raro senso de humor, estando sempre com um sorriso cativante no rosto. Essa sua característica marcante faz com que seja uma pessoa alto-astral e de bem com a vida. Sua popularidade vem de seu dom natural da comunicação, sendo alguém que se expressa sob diversas formas, seja falando, cantando, atuando, pintando e etc. Possui uma originalidade única, gostando de mesclar isso com sua criatividade. Sua intuição é aguçada, podendo sentir situações mesmo sem estar ciente sobre elas. Geralmente dedica-se muito à família e aos amigos, podendo sofrer decepções por não receber a recíproca na mesma proporção. Essas decepções ou frustrações podem trazer sérios problemas de saúde, principalmente no sistema nervoso, que poderá ficar demasiadamente abalado e problemas de pele. Pode passar a falsa impressão de ser irresponsável, mas, isso se deve a forma como age e encara as mais diversas situações, não mostrando aos outros como realmente se sente. É uma pessoa batalhadora, porém, lhe falta determinação. Por gostar de aparecer e receber elogios, é muito comum que goste de trabalhar com o público, mostrando sua criatividade, versatilidade e carisma. Por ter uma criatividade bem aguçada, não consegue ficar sem fazer nada e precisa estar em constante movimento. Isso faz com que faça várias coisas ao mesmo tempo, porém, raramente conclui tudo isso que inicia, deixando ótimos projetos para trás. Geralmente odeia receber críticas, não acatando os conselhos que recebe, o que, por vezes, lhe traz o arrependimento de não ter ouvido quem criticava ou aconselhava. "+
				 
				"<br>LADO POSITIVO Bom-humor, alegria, produção, criatividade, dons artísticos, ama a liberdade e possui talento com as palavras. "+
				 
				"<br>LADO NEGATIVO Entendia-se facilmente, tem vaidade, orgulho, extravagancia, comodismo, preguiça, hipocrisia e possui excesso de imaginação. ";
	        } else if(d2[2] == 4) {
	        	var edn = "Dia de Nascimento 4 – Dia da Persistência  "+
				"<br>Ser persistente é seu lema! Sua capacidade de persistir naquilo que deseja faz com que os outros sintam inveja dessa sua determinação e força de vontade. Disciplina, organização e disposição física fazem parte de seu cotidiano, o que unidos à sua perseverança, te fazem ser a pessoa que geralmente consegue tudo quer, principalmente no lado financeiro. Profissionalmente, consegue fazer com excelência os trabalhos metódicos, rotineiros e que necessitam de muita concentração, porém, pode ter certa dificuldade em interagir com novas invenções e/ou novas tecnologias logo de início, mas, adapta-se com facilidade às inovações. Por dar o melhor de si no lado profissional, geralmente possui boa colocação no mercado de trabalho, sendo alguém que geralmente está trabalhando em algo, seja para os outros ou para si mesmo. No lado financeiro, gosta do dinheiro que ganha e na maioria dos casos gosta de economizar e ter um dinheiro “extra” guardado. Embora nem sempre seja possível fazer uma poupança, quando pode, assim o faz, mantendo sua estabilidade financeira. Afetivamente prefere relacionamentos sérios, pois gosta de lealdade e respeito. Quando por algum motivo tem seus objetivos adiados ou não consegue concluí-los, poderá sofrer com dores de cabeça, distúrbios cardíacos ou renais devido ao excesso de raiva e frustração, devendo aprender a conter-se nesse casos. "+
				 
				"<br>LADO POSITIVO Organização, autodisciplina, firmeza, habilidade, talento com as mãos, pragmatismo, é confiável e gosta de trabalhar.  "+
				 
				"<br>LADO NEGATIVO Falta de comunicação, rigidez, falta de sentimentos, procrastinação, autoritarismo, afeições ocultas, ressentimento e severidade. ";
	        } else if(d2[2] == 5) {
	        	var edn = "Dia de Nascimento 5 – Dia da Versatilidade  "+
				"<br>Versatilidade é seu lema! Consegue ser adaptável mesmo em situações extremas e, além disso, sua natural versatilidade faz com que consiga se sobressair dessas situações sem sofrer muitos danos. Alegre, cativante e sociável, é a companhia perfeita e, por isso, está sempre recebendo todos os tipos de convites, seja para festas, churrascos, aniversários, confraternizações e etc. Possui ousadia, arriscando-se no que quer que seja, pois não tem medo de arriscar. Todavia, como possui poder psíquico forte, por vezes, consegue “sentir” as situações antecipadamente, e daí surge parte de sua ousadia. Amante da liberdade, deseja estar sempre em movimento e viajar é uma de suas paixões. Possui imaginação fértil e muita criatividade, tendo constantemente ideias inovadoras e inusitadas. Geralmente gosta de dinheiro e não mede esforços para consegui-lo, seja trabalhando por conta própria ou para os outros. Seu lado negativo é não gostar de receber ordens ou conselhos, o que, por vezes, poderá trazer atrasos no setor profissional. Gosta de informação e, em virtude disso, busca conhecimento nos mais diversos campos do saber, sendo alguém que de tudo sabe um pouco. Pode se dedicar muito no início de uma profissão, destacando-se mais que os outros, pois gosta de receber elogios e destacar-se. Afetivamente é comum que tenha vários relacionamentos afetivos antes de casar e, em certos casos, acaba casando mais de uma vez. "+
				 
				"<br>LADO POSITIVO Versátil, adaptável, progressista, fortes instintos, magnetismo, ousadia, amante da liberdade, perspicaz e sociável.  "+
				 
				"<br>LADO NEGATIVO Pouco confiável, instabilidade, procrastinação, inconsistente, excessivamente confiante, cabeça-dura.";
	        } else if(d2[2] == 6) {
	        	var edn = "Dia de Nascimento 6 – Dia do Amor "+ 
				"<br>O amor é sua essência! Gosta do aconchego do lar e de ter a família e amigos sempre por perto. Quando tem filhos, é do tipo que dá superproteção, podendo até sufocar os pequenos com tantos cuidados. Equilíbrio, compreensão e sentimentalismo fazem parte de seu cotidiano, porém, caso tenha alguma contrariedade ou quando as coisas não saem como deseja, pode sofrer com crises de ciúme, possessividade, nervosismo e até violência. Profissionalmente prefere posições superiores, pois pode contribuir mais para o bom desenvolvimento da empresa e não somente isso, também faz com que todos os envolvidos sejam afetados por suas melhorias. Por ser perseverante, geralmente consegue tudo que deseja. Afetivamente é comum sofrer com decepções, pois com frequência doa-se mais nos relacionamentos, frustrando-se com a pouca ou nenhuma recíproca por parte da pessoa amada. Essas decepções e frustrações no lado afetivo poderão te trazer problemas no sistema nervoso ou ósseo. "+
				 
				"<br>LADO POSITIVO Compreensão, fraternidade, solidariedade, idealismo, inclinação doméstica, humanitarista, possui equilíbrio e dons artísticos. "+
				 
				"<br>LADO NEGATIVO Insatisfação, ansiedade, timidez, irracionalidade, teimosia, falta de harmonia, dominação, egoísmo, desconfiança, cinismo, egocentrismo. ";
	        } else if(d2[2] == 7) {
	        	var edn = "Dia de Nascimento 7 – Dia da Inspiração  "+
				"<br>Inspiração é uma de suas características! Perfeccionismo, pensamento ágil e fértil, ponderação, poder de iniciativa e inspiração fazem de você uma pessoa um tanto enigmática, pois faz coisas numa perfeição e sutileza incríveis. Gosta do conhecimento, de saber mais sobre isso ou aquilo e é comum que saiba de tudo um pouco. Tem apreço pelo lado espiritual, podendo dedicar parte de sua vida buscando conhecer os mistérios da vida ou buscando o próprio autoconhecimento. Não é raro ver pessoas do dia 7 sendo líderes religiosos ou ligados ao esoterismo, misticismo, ocultismo, espiritismo e religião. Também pode dedicar-se ao estudo da filosofia. É exigente e, portanto, seleciona as poucas amizades que possui, porém, é fiel a essas amizades. Introspecção, discrição e tranquilidade fazem parte de sua personalidade, por isso, raramente sabem o que você está pensando. Gosta do silêncio e da solidão, pois pode colocar ainda mais em prática o seu poderoso senso analítico. Geralmente possui forte intuição e, por vezes, tem qualidades mediúnicas, podendo sentir vibrações sensíveis imperceptíveis aos demais. Profissionalmente é detalhista, fazendo com perfeição tudo o que se propõe a fazer. Afetivamente é uma pessoa um tanto difícil, pois não consegue adaptar-se facilmente aos relacionamentos, porém, embora possa não assumir rapidamente um relacionamento, gosta de manter o respeito. Quando separa, sofre com a perda e demora um pouco para envolver-se numa nova relação. "+
				 
				"<br>LADO POSITIVO Meticulosidade, idealismo, honestidade, poderes psíquicos, científico, racional e reflexivo.  "+
				 
				"<br>LADO NEGATIVO Dissimulação, enganação, pouco amigável, fingimento, ceticismo, sente confusão quando lida com detalhes, é indiferente, pouco sentimental e sensível às críticas.";
	        } else if(d2[2] == 8) {
	        	var edn = "Dia de Nascimento 8 – Dia do Êxito Material "+
				"<br>Negociar é seu lema! Nasceu para o mundo dos negócios, porém, leva essa arte de negociar bem mais além, sabendo negociar desde bens materiais até situações corriqueiras, como quem irá fazer a comida e quem irá lavar a louça. Organização, criatividade e praticidade são parte de sua personalidade forte e marcante. Possui o dom da liderança, que se for bem utilizado, te levará a tingir altos níveis dentro da hierarquia profissional, porém, precisa ter cautela para não pisar seus inferiores ou subordinados. Profissionalmente se dá bem em todos os cargos de liderança e chefia, contudo, trabalhando para si mesmo é ainda mais eficiente, pois pode agir com total liberdade. Gosta muito de bens materiais, podendo acumulá-los ao longo da vida, mas isso, se não gostar de ostentar o que tem, gastando indiscriminadamente. Se tiver cautela no setor financeiro, jamais passará por privações financeiras, do contrário, poderá viver em meio à dívidas. Embora demostre certa frieza e altivez, é também carente e sentimental, embora não demonstre isso. Afetivamente gosta de relacionamentos mais realistas e menos fantasiosos. Pode sofrer com crises de mau humor e quando isso ocorre, prefere isolar-se. E quando as coisas não saem como deseja, pode ter crises de dominação e agressividade. Geralmente possui forte determinação, fazendo com que consiga tudo que deseja. "+
				 
				"<br>LADO POSITIVO Liderança, meticulosidade, gosta de trabalhar, tem autoridade, proteção, poder de cura e faz bom juízo de valores.  "+
				 
				"<br>LADO NEGATIVO Impaciência, desperdício, intolerância, excesso de trabalho, dominação, desencoraja-se facilmente e falta de planejamento.";
	        } else if(d2[2] == 9) {
	        	var edn = "Dia de Nascimento 9 – Dia da Harmonia "+
				"<br>Compaixão faz parte de sua essência! Generosidade, compaixão, altruísmo, lealdade, audácia e coragem definem sua personalidade. Deseja um mundo feliz, próspero e harmonioso, onde todos possam ser aceitos como são, sem sofrerem retaliações por suas opções e escolhas. Gosta de conhecer novas pessoas e novos lugares, viajando o mundo, caso lhe seja possível. Sua independência e força de vontade fazem com que lute com coragem e determinação, sabendo que, embora seus planos não se concretizem de imediato, conseguirá isso através de sua persistência, o que geralmente ocorre. Possui forte autoconfiança, que por um lado é positivo, pois te faz obter grandes realizações durante a vida, porém, no lado negativo te leva a protelar as coisas, deixando tudo o que pode para “fazer depois”, o que te faz perder inúmeras oportunidades, inclusive financeiras. No setor profissional se sai melhor em atividades que não receba ordens e que tenha metas a cumprir, saindo-se melhor em atividades que possa empregar sua inspiração, compreensão e bondade, como é o caso das atividades ligadas a religião, filantropia, assistencialismo, serviço social, terapias holísticas e etc. Afetivamente é comum ter desapontamentos, sendo parte desses, causados por sua forma de agir dentro do relacionamento, já que poderá preferir dar atenção ao mundo ao invés de dar mais atenção à pessoa amada. "+
				 
				"<br>LADO POSITIVO Idealismo, humanitarismo, criatividade, sensibilidade, generosidade, magnetismo, carisma e desapego. "+
				 
				"<br>LADO NEGATIVO Frustração, insegurança, egoísmo, pouca praticidade e muita preocupação. ";
	        } else if(d2[2] == 10) {
	        	var edn = "Dia de Nascimento 10 – Dia da Autoconfiança  "+
				"<br>Autoconfiança é o que não te falta! Sua independência, audácia e fé em si mesmo fazem com que você acredite em seu potencial e consiga, através do esforço e mérito, atingir seus objetivos. Sua prestatividade é parte marcante de sua personalidade, pois está sempre à disposição para ajudar quem precisa de seu apoio. Geralmente é atraente fisicamente e cativante, o que atrai fãs do sexo oposto, porém, seu lado “meio arrogante” poderá despertar invejas e antipatias. Poderá sofrer com sentimento de possessividade com suas coisas, amigos, sócios e até cônjuge. Possui o dom da liderança por natureza, e trabalhos de chefia, liderança ou supervisão lhe serão mais fáceis de lidar do que recebendo ordens dos outros. Todavia, se trabalhar para si  mesmo poderá ter melhores resultados, já que poderá expandir sua forma de atuação, explorando sua criatividade e empreendedorismo. Trabalhos que lidam diretamente com o público podem ser mais favoráveis, pois possui o dom de convencer as pessoas. Afetivamente, pode desejar viver um relacionamento amoroso tão perfeito, que acabe se frustrando por não encontrar alguém que corresponda às suas expectativas. "+
				 
				"<br>LADO POSITIVO Liderança, criatividade, caráter progressista, vigor, otimismo, fortes convicções, competitividade, independência. "+
				 
				"<br>LADO NEGATIVO Arrogância, ciúme, egoísmo, orgulho, antagonismo, falta de controle, hesitação, impaciência. ";

	        } else if(d2[2] == 11){
	        	var edn = "Dia de Nascimento 11 – Dia da Harmonia "+
				"<br>A harmonia faz parte de sua essência! Gosta de todo que é belo e harmonioso, desde uma linda melodia até uma raríssima obra de arte. Vê no mundo sua inspiração para aprimorar-se, gostando de levar parte dessa sua inspiração aos que ama e admira. Age com diplomacia, discernimento e certa delicadeza, o que facilita seu posicionamento diante de qualquer situação ou problema. Por ter forte intuição, poderá fazer boas escolhas ou tomar atitudes sem ter de pensar muito, porém, deve procurar não agir por impulso. Persuasão, paciência e persistência são características naturais de sua personalidade, o que te faz conseguir tudo o que deseja, já que 11 é um número mestre. Geralmente é sentimental e necessita de um lar e uma família, pois acredita que sua proteção e segurança são frutos desse lar aconchegante e cheio de carinho, amor e união. Profissionalmente lida melhor com atividades em que possa expressar sua compreensão e diplomacia, todavia, precisa manter sua liberdade para desenvolver um bom trabalho. Se desejar empreender, deve ter ciência de que será necessário agir com muita determinação e coragem, afinal, os desafios serão muitos. Afetivamente poderá ser mais emocional do que racional, vindo a sofrer com frustrações, já que nem sempre obtêm sucesso ao impor seus pontos de vista e padrões morais. "+
				 
				"<br>LADO POSITIVO Equilíbrio, concentração, objetividade, entusiasmo, inspiração, espiritualidade, idealismo, intuição, capacidade de curar, humanitarismo e psiquismo. "+
				 
				"<br>LADO NEGATIVO Complexo de superioridade, desonestidade, falta de objetivos, excesso de emotividade, magoase facilmente, egoísmo, falta de clareza, dominação, mesquinhez e hipersensibilidade. ";
	        } else if(d2[2] == 12) {
	        	var edn = "Dia do Nascimento 12 – Dia da Autoexpressão "+
				"<br>Autoexpressão é seu dom! Todas as formas de se comunicar e expressar o que sente são facilmente expostos por você, seja falando, cantando, dançando, atuando, pintando, esculpindo e etc. Seu bom humor e simpatia são contagiantes, sendo sua marca registrada. Sua bondade e generosidade faz com que goste de ajudar ao próximo, porém, poderá ser vítima de exploração, já que poderão abusar de sua boa vontade e benevolência. Argumentos não te faltam para expor suas ideias e com o poder de persuasão que possui, geralmente consegue convencer os outros sobre seus pontos de vista. Possui habilidade manual e excelente dom artístico, podendo vir a atuar no ramo das artes. Idealista que é, dificilmente deixa de seguir seus ideais. Com uma mente fértil e criativa, deseja fazer mais coisas do que realmente consegue fazer, vindo a iniciar muitas coisas e concluir poucas. Sua agenda sempre lotada faz com que não consiga cumprir com todos os compromissos, vivendo com excesso de responsabilidades e afazeres, que na maioria dos casos, esgotam suas energias. Profissionalmente tem afinidade com todas as profissões que lidam com o público em geral, comunicações, meio artístico e social. Afetivamente poderá ter problemas relacionados ao ciúme, pois embora seja popular, não gosta muito da ideia de conviver com alguém assim. "+
				 
				"<br>LADO POSITIVO Criatividade, capacidade de iniciativa, disciplina, confiança e é atraente.  "+
				 
				"<br>LADO NEGATIVO Reclusão, excessivamente sensível, pouca cooperação e falta de autoestima. ";
	        } else if(d2[2] == 13) {
	        	var edn = "Dia do Nascimento 13 – Dia da Perícia "+
				"<br>Habilidade faz parte de sua essência! Destreza e praticidade fazem parte de sua personalidade. Gosta de seguir a ordem, mantendo a organização em casa ou no trabalho. Sua ousadia e dinamismo te impulsionam a dar início aos projetos, que tendem a fluir graças a sua determinação. Possui grande habilidade com as mãos, gostando de fazer consertos e reparos. Geralmente gosta de trabalhar e dar o melhor de si naquilo que faz, vindo a ser exemplo em seu segmento pela sua forma responsável e correta de agir. Profissionalmente trabalha melhor em atividades que envolvam disciplina, organização e disposição física, pois raramente sente cansaço. Trabalhos metódicos ou exaustivos também são bem executados por você, pois não vê dificuldades em seguir regras e nem se cansa em situações monótonas. É comum que goste mais do seu lado profissional, dando mais atenção a ele. Poderá gostar de fazer economia, pois não suporta a condição de não poder pagar por aquilo que deseja possuir. Afetivamente, embora não saiba expressar seus valorosos sentimentos, possui um coração enorme, cheio de amor, carinho, compreensão e prestatividade. Poderá ser um pouco carente, mas prefere não demonstrar isso. "+
				 
				"<br>LADO POSITIVO Ambição, criatividade, iniciativa e tem amor pela liberdade.  "+
				 
				"<br>LADO NEGATIVO Impulsividade, indecisão, autoritarismo, pouca emotividade e é rebelde. ";
	        } else if(d2[2] == 14) {
	        	var edn = "Dia de Nascimento 14 – Dia da Compreensão "+
				"<br>Compreensão é seu lema! Nasceu com a meta de compreender tudo que existe, sejam pessoas, fatos ou coisas, o que aflora seu lado investigativo. Sua persuasão e determinação são suas armas para atingir seus objetivos. Como enxerga melhor o momento atual devido a sua percepção analítica, preocupa-se mais com o presente do que com o futuro. O dia 14 é composto pelos números 1 e 4, sendo o 1 aquele que dá início às coisas e o 4 aquele que executa e constrói essas coisas, assim, para que não se sinta infeliz com suas conquistas ao longo do tempo, o ideal é renovar ou adquirir novos bens após alguns anos, já que fica feliz com essas novidades e mudanças, que são características inerentes a quem nasceu num dia que soma 5. Como ama movimento, viagens e atividades sociais são essenciais em sua vida. Profissionalmente é excelente negociante, sendo comum fazer vários tipos de atividades que te rendam lucros, mesmo aquelas que possuem um alto risco. Como possui carisma e socialidade, o comércio é uma área que pode ser bem explorada, todavia, também poderá se sair bem como líder ou em atividades que envolvam movimento e viagens. Afetivamente precisa estar ao lado de alguém que goste de novidades, movimento e viagens, pois não gosta de nenhum tipo de monotonia. Poderá não atar um relacionamento sério inicialmente, pois sente que precisa conhecer bem a outra pessoa antes de fixar uma união. "+
				 
				"<br>LADO POSITIVO Criatividade, habilidade, imaginação fértil, pragmatismo, determinação e gosta de trabalhar.  "+
				 
				"<br>LADO NEGATIVO Cautela ou impulsividade excessiva, instabilidade, teimosia e não tem consideração pelos outros. ";
	        } else if(d2[2] == 15) {
	        	var edn = "Dia de Nascimento 15 – Dia do Magnetismo Pessoal "+
				"<br>Seu magnetismo é irresistível! Todos te acham uma companhia agradável, e isso é devido a sua simpatia e carisma naturais de sua personalidade. Da mesma forma que seu magnetismo atrai fãs e seguidores, também é alvo de muita intriga e inveja, pois nem todos conseguem ficar felizes com seu brilho pessoal. Gosta da vida social e familiar, sendo alguém que dedica-se a todos igualmente. Em festas ou reuniões é comum que seja o centro das atenções. Possui o dom de unir as pessoas, sendo por vezes quem apazígua os ânimos alterados, trazendo de volta a harmonia do ambiente. Compreensão, bondade e generosidade são parte de sua personalidade, porém, poderá ser vítima de pessoas que usarão inescrupulosamente de sua boa-fé. Profissionalmente sente-se melhor em atividades em que possa ter contato com pessoas, sejam elas clientes ou funcionários. Sua inteligência e perseverança te fazem encontrar uma maneira de ganhar dinheiro e por isso, normalmente está exercendo alguma atividade profissional. Nas finanças, poderá preferir gastar seu dinheiro com bens duráveis, com prazeres pessoais ou com a pessoa amada, evitando gastar por ostentação. Afetivamente é recomendável que escolha alguém que partilhe dos mesmos propósitos e gostos, evitando que sofra com a separação. "+
				 
				"<br>LADO POSITIVO Disposição, generosidade, responsabilidade, amabilidade, cooperação, apreço e ideias criativas.  "+
				 
				"<br>LADO NEGATIVO Inquietação, medo de mudar, perda da fé, preocupação e certa indecisão. ";
	        } else if(d2[2] == 16) {
	        	var edn = "Dia de Nascimento 16 – Dia do Triunfo "+
				"<br>Triunfar é seu lema! Perfeccionista, perspicaz e com instinto investigativo, adora desvendar mistérios, conhecer coisas ocultas e acumular conhecimentos dos mais diversos. Como possui forte sensibilidade, intuição e inspiração, sente que suas qualidades psíquicas são aguçadas, mesmo sem ter estudado ou procurado desenvolver essas qualidades. Como o dia 16 representa os extremos, dependendo de como levar a vida, poderá viver tanto na riqueza como na pobreza. Se mantiver uma vida equilibrada, conseguirá ter excelentes resultados no lado espiritual e financeiro. Possui certo ceticismo e uma mente analítica, gostando de conhecer a essência das coisas e pessoas. Profissionalmente, como gosta de pensar sobre as coisas, os trabalhos que envolvem a pesquisa, investigação, intuição, bom raciocínio, análise e perfeccionismo são os melhores, pois te dão a liberdade para colocar em ação sua mente fértil. Também possui boa comunicação e sabe lidar com pessoas, podendo atuar na área da educação e direito. "+
				 
				"<br>LADO POSITIVO Responsabilidade, integridade, intuição, sociabilidade, cooperação e discernimento.  "+
				 
				"<br>LADO NEGATIVO Preocupação, insatisfação, irritabilidade, egoísmo, ceticismo e falta de solidariedade. ";
	        } else if(d2[2] == 17) {
	        	var edn = "Dia de Nascimento 17 – Dia da Perspicácia "+
				"<br>É perspicaz por natureza! Consegue analisar e compreender qualquer pessoa ou situação com muita facilidade. Sua astúcia unida ao seu bom humor geram uma simpatia única, que vai até o trato com seus opositores. Inteligente, gosta de promover a justiça e bons modos, sendo aquela pessoa admirada por sua forma singular de ser. Profissionalmente, atividades de liderança e ou supervisão são favoráveis, pois possui um forte senso de responsabilidade e organização. Com sua forma articulada de fazer negócios, poderá atuar em atividades que envolvam compra e venda ou atuando na área das finanças e direito. Se colocar em prática sua determinação, persistência e coragem, com trabalho justo e honesto chegará a acumular muitos bens materiais, pois possui a essência da vibração materialista 8 (1 + 7 = 8). Afetivamente é mais racional do que sentimental, mas, isso não significa que não ama, pelo contrário, acredita no amor e, quando casa, geralmente oferece sua fidelidade e respeito a quem está do seu lado. "+
				 
				"<br>LADO POSITIVO Ponderação, especialização, capacidade de planejamento, senso para os negócios, gosta de trabalhar, senso científico e habilidade para atrair dinheiro.  "+
				 
				"<br>LADO NEGATIVO Teimosia, descuido, desleixo, mal humor, sensibilidade, desconfiança, preocupação e adora criticar os outros.";
	        } else if(d2[2] == 18) {
	        	var edn = "Dia de Nascimento 18 – Dia do Poder Mental  "+
				"<br>Sua mente é poderosa! Poucas pessoas tem um poder mental como o seu, o que significa que tanto poderá ser muito positivista como negativista. Também devido a esse poder, poderá optar entre viver uma vida próspera ou miserável, pois consegue atrair tudo aquilo que deseja, seja bom ou ruim, e por isso deve ter o máximo de cuidado com aquilo que deseja ou pensa. Possui uma mente ativa, desperta e inteligente, o que te faz se sobressair em qualquer área. Gosta de boa conversa e se interessa pelos mais diversos assuntos. Intuição e independência aliados à sua coragem te fazem seguir em busca de seus objetivos, o que muitas vezes te leva a não enxergar os riscos pelo caminho. Geralmente é sensível a problemas espirituais e deve manter seu lado espiritual fortalecido. Nesse dia nascem muitos líderes religiosos, médiuns, magos, místicos e esotéricos, pois possuem um lado espiritual bem aguçado. Profissionalmente poderá se sair bem em todas as áreas que ajudem na evolução humana ou na melhoria de condições de sobrevivência, como nas áreas do direito, educação, saúde, terapias holísticas, etc. Afetivamente gosta de relacionamentos duradouros, já que possui forte sentimento carinho e compreensão, se envolvendo apenas com quem realmente sente algo verdadeiro. "+
				 
				"<br>LADO POSITIVO Personalidade progressista, alto poder de intuição, coragem, eficiência e capacidade de aconselhar.  "+
				 
				"<br>LADO NEGATIVO Emoções descontroladas, falta de ordem, egoísmo, vaidade, ambição desmedida e incapacidade de concluir trabalhos ou projetos. ";
	        } else if(d2[2] == 19) {
	        	var edn = "Dia de Nascimento 19 – Dia do Caráter "+
				"<br>Você tem força de caráter! Independência, iniciativa, criatividade, originalidade, audácia e coragem são evidentes em sua personalidade marcante. Gosta de fazer tudo que está ao seu alcance para atingir os objetivos, o que inclui atos heroicos e/ou impulsivos. Sua versatilidade impulsiona seu desejo por mudanças, o que faz estar sempre planejando formas de melhorar a vida de todos que te cercam. Como o 19 é composto pelo 1 (início) e 9 (finalização), é comum que sofra com oscilações financeiras, afetivas e pessoais, indo do bom ao ruim com extrema facilidade, porém, se souber manter o equilíbrio entre essas duas vibrações, terá êxito no que empreender, pois sua força de vontade e coragem te impulsionam ao sucesso. Passa por cima dos obstáculos que a vida lhe impõe com firmeza e determinação, pois enxerga os obstáculos como desafios que necessitam ser vencidos e não como dificuldades intransponíveis. Profissionalmente se sairá bem em atividades que possa expressar seus dons de liderança, saindo-se melhor quando trabalha para si mesmo. Afetivamente é bom conhecer bem a pessoa antes de se envolver, pois é comum que se envolva em diversos relacionamentos afetivos sem sucesso. "+
				 
				"<br>LADO POSITIVO Dinamismo, criatividade, liderança, progressismo, otimismo, convicções fortes, competitividade e independência.  "+
				 
				"<br>LADO NEGATIVO Egocentrismo, preocupação, medo de rejeição, materialismo, impaciência e tendência à depressão quando não consegue atingir os objetivos. ";
	        } else if(d2[2] == 20) {
	        	var edn = "Dia de Nascimento 20 – Dia da Sensibilidade "+
				"<br>Você é sensível! Sua sensibilidade é tanto emotiva como também sensorial. Emociona-se com facilidade, mesmo quando ouve falar de assuntos tristes onde não conhece os envolvidos. Sente grande compaixão pelo próximo e está sempre à disposição para ajudar quem quer que seja. Gosta de paz, harmonia e da vida familiar, tentando manter todos unidos e felizes. Quando surgem desavenças, é normal que peçam sua presença para acalmar os ânimos, pois, sabem que tentará ao máximo manter a harmonia entre todos. Por vezes, se sujeita a situações difíceis para agradar aos que ama. Possui romantismo, afeto e compreensão, sendo paciente e tolerante com os demais. Gosta de novidades, passeios, viagens, conhecer gente nova e experimentar novas experiências. Profissionalmente atua melhor em atividades em que possa cooperar, trabalhar em equipe ou lidar diretamente com o público. Possui grande habilidade, gostando de fazer tudo com rapidez, porém, deve prezar pela qualidade do serviço que presta. Afetivamente tem muito romantismo e compreensão, porém, precisa pensar bem antes de tomar decisões importantes, evitando vacilações que envolvem traição e oportunismo. "+
				 
				"<br>LADO POSITIVO Boas parcerias, gentileza, tato, receptividade, intuição, consideração, harmonia e de presença agradável.  "+
				 
				"<br>LADO NEGATIVO Desconfiança, subserviência, timidez, sensibilidade excessiva, certo egoísmo e tendência a magoar-se com facilidade.";
	        } else if(d2[2] == 21) {
	        	var edn = "Dia de Nascimento 21 – Dia do Idealismo "+
				"<br>Você é idealista! Sonha alto, pois consegue vislumbrar inúmeras oportunidades com sua mente fértil. Possui criatividade, imaginação e boa comunicação, o que favorece seus dons artísticos. Falando em dons artísticos, é provável que ame a música, pintura, dança ou qualquer forma de arte, não só admirando como também executando-as. Seu carisma e bom humor te fazem ter uma aparência muito mais jovem, gostando de reuniões sociais, festas, encontros ou qualquer tipo de evento em que possa conversar e descontrair. Embora possua ambição, é comum que abandone seus projetos no meio do caminho, deixando-os para trás, porém, essa dispersão gera muitos prejuízos, pois investe muita energia à toa em projetos que ficarão inacabados, o que te faz perder tempo, empenho e às vezes, dinheiro. Profissionalmente adapta-se melhor em atividades que envolvam liberdade, criatividade e comunicação, pois nelas poderá explorar seu lado criativo, comunicativo e inovador. Afetivamente, embora tenha muita emotividade, se apega muito facilmente, o que faz com que vivencie muitos romances ao longo da vida. "+
				 
				"<br>LADO POSITIVO Inspiração, criatividade, uniões por amor e relacionamentos duradouros.  "+
				 
				"<br>LADO NEGATIVO Dependência, temperamental, nervosismo, falta de visão e medo de mudanças. ";

	        } else if(d2[2] == 22){
	        	var edn = "Dia de Nascimento 22 – Dia da Praticidade "+
				"<br>Praticidade é sua essência! Gosta de fazer tudo da maneira mais prática, ágil e rápida possível, pois seu desejo é resolver ou concluir tudo em tempo recorde. Por vezes, faz isso assim para provar para si e para os outros que é capaz de fazer qualquer coisa melhor e mais rápido que os demais. Possui foco e determinação incríveis, porém, isso ocorre somente quando está fazendo algo que realmente deseja, caso contrário, será a pessoa mais desinteressada e desmotivada do mundo. Seu coração generoso e bondoso faz com que sinta compaixão e altruísmo, envolvendo-se em ações sociais, causas humanitárias ou qualquer tipo de atividade que ajude o próximo. Ama natureza e é nesse contato com ela que consegue recarregar suas energias, sentindo-se em paz e com enorme vigor após um dia na praia ou no campo. Tem certo apego familiar, porém, não acredita que precisa sufocar os demais para provar seus sentimentos. Sonha alto e faz grandes planos, desejando mudar o mundo, fazer grandes construções ou agir nas causas humanitárias. Como é um duplo “2”, tudo te acontece em dobro, seja positivo ou negativo, precisando manter o equilíbrio emocional. Profissionalmente é independente e idealista, saindo-se melhor em atividades que não necessite receber ordens, não seja monótono ou rotineiro. Afetivamente gosta mais da atenção que recebe, sendo por vezes distante. Pode amar muito, porém, não faz grandes declarações desse amor. "+
				 
				"<br>LADO POSITIVO Intuição elevada, pragmatismo, praticidade, habilidade com as mãos, capacidade de organização, realismo, resolução de problemas e empreendedorismo.  "+
				 
				"<br>LADO NEGATIVO  Esquemas de enriquecimento rápido, nervosismo, autoritarismo, materialismo, falta de visão, ganância, autopromoção e preguiça. ";
	        } else if(d2[2] == 23) {
	        	var edn = "Dia de Nascimento 23 – Dia da Persuasão  "+
				"<br>Sua essência é persuadir! Não descansa enquanto não conseguir aquilo que realmente deseja, usando seu dom natural de persuasão para fazer suas conquistas. Paciência, perseverança, determinação e coragem são algumas de suas qualidades. É independente, autossuficiente, versátil, responsável e adaptável. Consegue conservar sua postura nas mais atípicas circunstancias, adaptando-se à elas facilmente. Sua personalidade é encantadora e carismática, não te faltando convites para festas, eventos ou qualquer situação onde desejem ter uma presença tão marcante quanto a sua. Consegue aprender tudo com extrema facilidade e, pode e deve, aprimorar essa sua qualidade. Profissionalmente, por ter uma essência sensitiva e sensível, servir aos outros será desgastante e exaustivo, devendo buscar profissões em que aja por conta própria, como a área da saúde, terapias holísticas, educação, política ou profissões que lidam diretamente com pessoas. Por ser uma vibração de movimento, trabalhos que envolvam viagens estão favorecidos. Afetivamente prefere pessoas que sigam seu ritmo movimentado e aceitem sua natureza independente. "+
				 
				"<br>LADO POSITIVO Criatividade, versatilidade, intuição, paciência, persuasão, confiança, lealdade, responsabilidade e boa comunicação.  "+
				 
				"<br>LADO NEGATIVO Egoísmo, insegurança, teimosia, inflexível, adora fazer críticas e tem preconceitos.";
	        } else if(d2[2] == 24) {
	        	var edn = "Dia de Nascimento 24 – Dia da União  "+
				"<br>Seu desejo é o de união! Ama a harmonia, o companheirismo, a compreensão e a amizade, priorizando a união entre todos. Dá valor a honestidade, o caráter e a diplomacia. É inteligente, cativante e de certa forma sensual (sem vulgaridades), atraindo fãs por onde passa com seu charme. Como importa-se com os outros, poderá sofrer com o sofrimento alheio. Tem gosto pela gastronomia, podendo atuar nesse segmento ou apenas gostar de cozinhar. Profissionalmente as atividades que envolvam contato humano estão favorecidas, como saúde, educação, alimentação, terapias holísticas e serviço social. Afetivamente, prefere relacionamentos sólidos, pois deseja constituir uma família, ter um lar e dar segurança aos que ama, porém, precisa compreender que a vida após o casamento não é igual a vida de antes, principalmente com a chegada dos filhos, devendo casar apenas quando desejar de fato dedicar-se ao lar e a família. "+
				 
				"<br>LADO POSITIVO Energia, idealismo, habilidades práticas, forte determinação, honestidade, franqueza, justiça, harmonia, diplomacia, alegria, generosidade e amor à casa. "+
				 
				"<br>LADO NEGATIVO Materialismo, mesquinhez, teimosia, dominação, aversão à rotina, pouco confiável, cruel e sofre com crises de ciúmes.";
	        } else if(d2[2] == 25) {
	        	var edn = "Dia de Nascimento 25 – Dia do Progresso  "+
				"<br>O progresso é seu lema! Gosta de ver as coisas fluindo, progredindo e sendo concluídas com êxito. Perfeccionista, detalhista e exigente (consigo e com os outros), prefere fazer tudo a seu modo. Possui senso analítico, intuição, inspiração e sensibilidade para analisar e compreender tudo à sua volta, o que inclui sensações e sentimentos alheios. Versátil, perspicaz e diplomata, gosta da tranquilidade, do silencio e da solidão, pois assim consegue inspiração para entrar em contato com seu EU interior. Inteligente, gosta dos estudos e de pensar sobre tudo que existe, porém, esse estudo pode ser o acadêmico ou simplesmente o estudo sobre qualquer coisa que te chama atenção, pois gosta de saber sobre os mais variados temas. Embora saiba de suas inúmeras capacidades, precisa ter mais fé em si mesmo. Sua bondade e honestidade te fazem uma pessoa que ajuda a todos no que pode, porém, poderão abusar de sua boa vontade. Sua natureza introspectiva te torna uma pessoa misteriosa e até incompreensível. Gosta de música e poderá tocar instrumentos musicais, caso lhe seja possível. Profissionalmente atividades ligadas a ciência, tecnologia, investigação, pesquisa, religião, esoterismo, filosofia e direito são favoráveis. Afetivamente é incompreensível, pois geralmente reprime ou esconde seus sentimentos e emoções, aparentando ser uma pessoa fria e sem sentimentos, porém, a verdade é que não consegue expressá-los. "+
				 
				"<br>LADO POSITIVO Forte intuição, perfeccionismo, percepção, ponderação, criatividade, talento para lidar com as pessoas e capacidade para ganhar dinheiro.  "+
				 
				"<br>LADO NEGATIVO Impulsividade, impaciência, emotividade excessiva, ciúmes, instabilidade, adora críticas e de certa maneira sofre de mal humor. ";
	        } else if(d2[2] == 26) {
	        	var edn = "Dia de Nascimento 26 – Dia da Justiça  "+
				"<br>Você ama a justiça! É coerente, competente e tem grande capacidade de discernimento. Sua natural perseverança e determinação te fazem seguir em busca de seus objetivos, que aliados à sua coragem, garantem quase sempre o sucesso. Gosta de organização e praticidade. É elegante, veste-se bem, mesmo que não seja com as roupas da moda e gosta de coisas boas e caras, o que inclui a aquisição das novas tecnologias. Dá segurança à família, trabalhando incansavelmente para que nada os falte. Possui um ar de superioridade e frieza, mostrando ser calculista e sem sentimentos, mas, essa é uma falsa impressão que causa em quem não te conhece. Profissionalmente, devido ao seu ar de superioridade e seu dom natural de liderança e comando, se sairá bem em atividades onde possa expor suas ideias e lidere os demais. Sua organização, praticidade e senso de justiça e responsabilidade mostram que atividades ligadas às finanças, direito, comércio e economia são positivas. Afetivamente não demonstra sentimentos, mas, quando ama é com muita intensidade, porém, o casamento deve vir após a estabilidade profissional e financeira. "+
				 
				"<br>LADO POSITIVO Praticidade, entusiasmo, coragem, justiça, perseverança, lealdade e tem orgulho da família que possui. "+
				 
				"<br>LADO NEGATIVO Teimosia, rebeldia, falta de entusiasmo, falta de persistência e atrai relacionamentos instáveis. ";
	        } else if(d2[2] == 27) {
	        	var edn = "Dia de Nascimento 27 – Dia da Audácia "+
				"<br>Sua essência é audaciosa! Tem ousadia, determinação e coragem, indo em busca de seus ideais sem medo de enfrentar os obstáculos que possam estar em seu caminho. A generosidade, compaixão e solidariedade são parte de sua personalidade, assim como certa distância e frieza, podendo oscilar entre esses dois facilmente. É independente e amante da liberdade, o que te faz gostar de fazer suas coisas por si só. Possui um carisma único, que é uma mistura de seu intelecto com sua natureza psicológica, gerando assim um sentimento de admiração e respeito pelos que te conhecem. É comum que sua presença possa trazer harmonia e paz aos que estão ali do seu lado, e é mais comum ainda que venham te pedir orientações ou conselhos sobre os mais diversos assuntos. Profissionalmente é melhor que trabalhe em atividades que não necessite receber ordens e que lide com o público, como a área da saúde, terapias holísticas, educação, serviço social e direito. Afetivamente, poderá doar-se cegamente, vindo a sofrer com a falta de reciprocidade. Possui muito afeto pelos que ama, dedicando-se a eles incansavelmente. "+
				 
				"<br>LADO POSITIVO Versatilidade, imaginação, criatividade, coragem, compreensão, espiritual, audaz e com grande força mental.  "+
				 
				"<br>LADO NEGATIVO Inquietação, nervosismo, desconfiança, protelação e gosta de envolver-se em brigas ou discussões. ";
	        } else if(d2[2] == 28) {
	        	var edn = "Dia de Nascimento 28 – Dia do Querer"+
				"<br>Você tem a essência do querer! E não dizem que você “quer demais” à toa! Já que é de sua natureza não se contentar com o que já tem, desejando sempre mais e mais. Sua independência e ambição unidas a esse desejo de “querer” te fazem lutar em busca de seus objetivos, sendo uma pessoa admirada por sua determinação e persistência. Possui certa timidez, principalmente quando não conhece as pessoas que está ao seu redor. Diplomacia, compreensão e senso de justiça fazem parte de sua personalidade marcante. Profissionalmente lida melhor com atividades independentes e de liderança. Como possui grande vitalidade física, poderá se dedicar a mais de uma atividade ao mesmo tempo. Possui um espírito inovador e empreendedor, porém, precisa desenvolver sua autoconfiança e fortalecer seu espírito competitivo para colocar suas ideias em ação. Precisa iniciar projetos e evitar abandoná-los no meio do caminho, pois isso lhe tira grandes chances de êxito no lado profissional. Afetivamente prefere relacionamentos sérios, estáveis e dinâmicos. "+
				 
				"<br>LADO POSITIVO Compaixão, progressismo, temperamento artístico, ambição, gosta de trabalhar e gosta de levar uma vida doméstica estável.  "+
				 
				"<br>LADO NEGATIVO Sonha alto demais, falta de compaixão, autoritarismo, agressividade, falta de confiança, orgulho, vive se queixando e é excessivamente dependente dos outros.";
	        } else if(d2[2] == 29) {
	        	var edn = "Dia de Nascimento 29 – Dia da Espiritualidade  "+
				"<br>Você tem forte espiritualidade! Nasceu com sensibilidade a nível espiritual, o que te faz enxergar a espiritualidade de forma mais profunda. Intuição, idealismo, coragem e liderança são parte de sua personalidade forte. Extremista, poderá ir da alegria à raiva em segundos, devendo tentar manter seu ponto de equilíbrio. Possui o dom da persuasão e é cativante, podendo influenciar muitas pessoas com seus ideais. E como possui um lado espiritual aguçado, caso opte por trilhar esse caminho espiritual, deve se atentar para não cair no fanatismo e deve evitar influenciar os outros a seguirem seus passos, deixando-os livres nas decisões. Seu pacifismo, diplomacia e dom de conciliar os outros te faz viver em meio a pessoas que necessitam de seus conselhos ou ajuda, principalmente no lado espiritual. Profissionalmente as atividades que envolvam contato com o público são favorecidas, principalmente as profissões ligadas ao esoterismo, religião, espiritismo ou terapias holísticas, pois cuidam da elevação humana. Afetivamente, como é extremista, poderá se descontrolar emocionalmente, vindo a tomar atitudes impulsivamente e/ou apaixonadas demais, levando a várias separações dolorosas, o que dificulta o início de novas relações afetivas. "+
				 
				"<br>LADO POSITIVO Inspiração, equilíbrio, paz interior, generosidade, sucesso, criatividade, intuição, misticismo, capacidade de liderança e mundanismo.  "+
				 
				"<br>LADO NEGATIVO Nervosismo, mau humor, extremismo, falta de consideração, arrogância e orgulho. ";
	        } else if(d2[2] == 30) {
	        	var edn = "Dia de Nascimento 30 – Dia da Realização "+
				"<br>Realização é seu lema! Possui um forte desejo de autorrealização e, se por um lado gosta de colocar a mão na massa e ver seus sonhos e objetivos sendo realizados, por outro, tem a tendência da autossabotagem, subestimando-se e se desvalorizando, achando ser incapaz de tais conquistas, abandonando-as antes do término. Tem apego à família e aos amigos, e devido a sua tolerância e compressão, poderão aproveitar de sua boa-vontade. Mesmo com mais idade terá uma aparência jovem, alegre e descontraída. É independente e idealista, possuindo forte imaginação, intuição, eloquência, criatividade e dons artísticos aguçados. A rotina pode te levar à exaustão, assim como o excesso de atividades em que se envolve poderá esgotar suas energias. Profissionalmente, qualquer atividade que envolva comunicação, criatividade e contato com o público são favorecidas, pois poderá desenvolver seus inúmeros talentos. Afetivamente prefere pessoas dinâmicas, alegres e comunicativas. "+
				 
				"<br>LADO POSITIVO Amor à diversão, lealdade, amizade, talento com as palavras, criatividade e generosidade.  "+
				 
				"<br>LADO NEGATIVO Preguiça, obstinação, impaciência, insegurança, indiferença, desperdício de energia e não gosta de receber críticas.";
	        } else if(d2[2] == 31) {
	        	var edn = "Dia de Nascimento 31 – Dia da Habilidade "+
				"<br>Sua habilidade é incrível! Você tem grande capacidade de organização, concentração e responsabilidade. Gosta de ter segurança financeira, por isso, é comum que faça economia e goste de juntar dinheiro., porém, deve evitar emprestá-lo. Gosta de conversar e, embora não fale muito, gosta de ouvir o que os outros tem a dizer sobre os mais variados assuntos. Não tem muitos amigos, mas, valoriza os que possui, dando-lhes, às vezes, um valor muito maior do que possuem, vindo a se decepcionar por confiar além do que deveria. Aprecia a sinceridade e pode impressionar aos demais quando fala suas verdades. Gosta de seguir às leis e cumprir regras, pois sabe que elas existem por serem necessárias. Devido à sua determinação e paciência é muito comum que atinja seus objetivos, mesmo que isso leve mais tempo que o usual. Profissionalmente as atividades que exigem responsabilidade, resistência e disciplina estão favorecidas, bem como as atividades que exijam trabalho sistemático, monótono ou enfadonho. Devido ao seu caráter e honestidade, poderá assumir cargos de confiança ou que exijam muitas horas de trabalho. Afetivamente aprecia a lealdade e a compreensão, preferindo relacionamentos sérios e duradouros. "+
				 
				"<br>LADO POSITIVO Liderança, criatividade, vigor, otimismo, fortes convicções, espírito de competição, independência e habilidade.  "+
				 
				"<br>LADO NEGATIVO Arrogância, ciúme, egoísmo, orgulho, fraqueza de caráter, hesitação e impaciência. ";
	        }

	        // Missão

	        var mi7 = parseInt(s7)+parseInt(d7);
	        var mi8 = mi7.toString();

	        if(mi8.length > 1 && mi8 != 22 && mi8 != 11) {

	                            var mi9 = mi8.split('');
	                            var mi10 = parseInt(mi9[0]);
	                            var mi11 = parseInt(mi9[1]);
	                            var mi7 = mi10+mi11;

	                        }

	        if(mi7 == 1) {
	        	var emi = "Missão 1 – Liderança  "+
				"<br>O número um na Missão mostra liderança, individualismo e autoconfiança. As atribulações, contratempos, obstáculos e vitórias que obteve ou obterá na primeira metade da vida (até os 45 anos), servem ou serviram para desenvolver a força moral necessária na segunda metade, quando necessitará se estabilizar materialmente e cumprir seus deveres sociais e espirituais.  Com desejo de ser o primeiro e independente, o possuidor desta Missão tem inclinação a ser individualista, inovador, corajoso e com muita energia, predicados que deve cultivar ao longo da sua vida. O espírito pioneiro o encoraja a se aventurar sozinho nos seus empreendimentos.  Esta força também pode estimulá-lo a desenvolver habilidades executivas, de organização, criatividade e originalidade.  A Missão 1, é a da pessoa inteligente, mas também é do ambicioso e agressivo.  É confiante em seus propósitos, independente e, se quiser, poderá aspirar aos maiores cargos na sua profissão ou atividade.  Tem tendência a ser autoritário, dominador e inflexível em seus propósitos, o que lhe causará alguns problemas, principalmente com respeito aos subordinados e pessoas mais chegadas, como parentes e amigos.  Será sempre invejado e deve se proteger espiritualmente contra essa inveja e contra inúmeras maledicências que dirão sobre sua pessoa.  Será também admirado, respeitado e terá a consideração dos outros.  Se agir com prudência e sabedoria, poderá ser muito bem-sucedido na política, na administração de grandes empresas, como líder de povos ou excelente místico.  Idealista e sociável, busca estabilidade emocional e segurança.  Tem uma personalidade carismática e atrai sempre amigos e admiradores respeitáveis. "+

				"<br>LADO POSITIVO Liderança, criatividade, caráter progressista, vigor, otimismo, convicções fortes, competitividade, independência e espírito de união.  "+
				 
				"<br>LADO NEGATIVO Arrogância, ciúme, excesso de orgulho, antagonismo, falta de controle, egoísmo, instabilidade e impaciência.  ";
	        } else if(mi7 == 2) {
	        	var emi = "Missão 2 — Harmonia  "+
				"<br>O número dois na Missão mostra que sua grande virtude é a diplomacia e companheirismo. Representa a solidificação do ser humano, que possui tanto capacidade de trabalhar em equipe como também é disposto a servir, sem esperar recompensas por isso. Gosta de muita organização e quer que tudo à sua volta esteja em perfeito funcionamento. Consegue manter o equilíbrio entre a pesquisa e execução, e coerência entre seus propósitos e objetivos. Gosta de paz e harmonia e leva consigo esse sentimento por onde quer que vá. Pode parecer frio, calculista, incrédulo ou obstinado, porém, sua realidade é outra, pois é afetuoso, bom amante e um apoio para todos os que de você necessitam, não fazendo distinção quanto aos que irá ajudar. Por ser sincero, íntegro, honesto e altruísta, acredita que as outras pessoas também o são, podendo vir a sofrer com desenganos e decepções, já que muitos podem vir a aproveitar-se de sua boa vontade e boa-fé. Quando é vítima desses desapontamentos, principalmente vindo das pessoas que confia, fica deprimido e chateado, porém, como em sua essência existe o sentimento de paz e harmonia, logo se recupera desses inconvenientes e perdoa os que lhe fizeram mal, não guardando em si nenhuma mágoa ou rancor. Por ser naturalmente um mediador, poderá ser um excelente advogado, juiz, diplomata, médico ou professor. Poderá também atuar em grandes organizações, pois possui grande poder de cooperação e organização. Como possui um organismo sensível, deve evitar bebidas alcoólicas, cigarro e drogas em geral. "+
				 
				"<br>LADO POSITIVO Harmonia, equilíbrio, diplomacia, receptividade, companheirismo, cooperação, altruísmo, gentileza, tato, intuição, consideração, solidez, honestidade, integridade, sinceridade, conservadorismo, inteligência, organização e economia. "+
				 
				"<br>LADO NEGATIVO Excesso de sensibilidade, subserviência, falta de autoconfiança, desconfiança, mau humor e tendência a ofender-se pela menor provocação.";
	        } else if(mi7 == 3) {
	        	var emi = "Missão 3 — Criatividade "+
				"<br>O número três na Missão mostra criatividade, dons artísticos e forte poder de imaginação. A autoexpressão faz parte de sua vida e poderá usá-la de diversas formas, seja falando, cantando, representando, escrevendo ou pintando. Possui a junção de boa comunicação e excelente criatividade, o que o torna sociável e popular. "+
				"<br>Não parece ter a idade que possui, pois é jovial, bem-humorado e sonhador.  Gosta de novas aventuras e está constantemente buscando um novo projeto que estimule sua criatividade. Por vezes será interpretado como irresponsável, pois sua natureza jovial e extrovertida faz com que seja visto assim pelos que não o conhecem a fundo. Essa visão distorcida poderá afetar suas relações pessoais, sociais e até profissionais, por isso é importante externar que você é responsável. Grandes oportunidades poderão surgir ao longo de sua vida, porém, deverá interpretá-las e seguir sua própria intuição, evitando que se deixe seduzir pela conversa dos outros. Como geralmente não se deixa dominar pelo desanimo ou depressão, consegue ser bemsucedido em suas realizações, já que “quando realmente quer” consegue tudo o que deseja. Costuma solucionar problemas através de sua capacidade criativa e sabedoria, seja no convívio familiar, social ou profissional. Quando está preocupado ou tenso prefere não demonstrar tais sentimentos, a fim de não contaminar os outros. Profissionalmente deve evitar funções que sejam monótonas, sistemáticas ou enfadonhas, como caixa de banco, escriturário ou operário industrial. Será bem-sucedido em funções que exijam criatividade e oratória, como comunicador, jornalista, radialista, apresentador, palestrante, artista, músico, paisagista, estilista, cabeleireiro, esteticista, empresário da moda e beleza ou na literatura. "+
				 
				"<br>LADO POSITIVO Criatividade, boa comunicação, dons artísticos, excelente senso de humor, sociável, popular, amigável, expressivo, alegre e jovial. "+
				 
				"<br>LADO NEGATIVO Hipócrita, convencido, exagerado, extravagante, vaidoso, preguiçoso, comodista, procrastinador, impaciente, excessivamente imaginativo e com tendência a entediar-se facilmente, desistindo de seus objetivos antes mesmo de concluí-los.  ";
	        } else if(mi7 == 4) {
	        	var emi = "Missão 4 - Vontade "+
				"<br>O número quatro na Missão mostra a força de vontade, perseverança, disciplina, sinceridade, honestidade, carisma, organização e paciência. É realista, vivendo com os pés no chão, sem fazer planos extravagantes e distantes de sua realidade ou sendo visionário. Sua perseverança faz com que siga em busca de seus objetivos até alcançá-los, porém, gosta de utilizar os meios tradicionais e já conhecidos, evitando aventurar-se com estratégias novas ou desconhecidas. Enfrenta os obstáculos com valentia, coragem e determinação, sendo um lutador realista da vida. A missão 4 mostra que veio ao mundo para construir, ajudando a coletividade, sendo resultado dessa ação a sua realização, já que gosta de ajudar o mundo e raramente vive em prol de si mesmo. Essa missão exige que seja amoroso, tolerante, paciente e harmonioso; essas virtudes serão mais latentes após os 45 anos, quando sentirá que esse seu jeito atrairá mais pessoas em busca de seus conselhos e orientações.  É muito trabalhador e esforçado, dotado de habilidades que o ajudam a perceber e agarrar as boas oportunidades, sendo que entre algumas delas poderá estar a chance de se conquistar o sucesso. Possui ambição equilibrada, que o ajuda a administrar bem o seu dinheiro, porém, caso não seja evoluído espiritualmente, poderá não saber lidar com os bens que possui. Poderá ser bem-sucedido na construção civil, na química, na metalurgia, na odontologia, na segurança pública, na política e nas finanças de um modo geral.  Terá mais sucesso se trabalhar com parcerias do que individualmente. Por ser carismático, amigo e sincero, poderá obter prestígio e reconhecimento de suas habilidades, seja nacional como internacionalmente, porém, precisa estar evoluído espiritualmente e só assim poderá contribuir com o bem-estar mundial. Cultive sempre seu carisma e não deixe de trabalhar em prol do crescimento da humanidade. "+
				 
				"<br>LADO POSITIVO Organizado, disciplinado, realista, estável, trabalhador, habilidoso, perseverante, sincero, honesto, íntegro, paciente, conservador, esperançoso, confiável, pragmático e autodisciplinado.  "+
				 
				"<br>LADO NEGATIVO Pouco comunicativo, autoritário, muito econômico, rígido e guarda ressentimentos. ";
	        } else if(mi7 == 5) {
	        	var emi = "Missão 5 - Versatilidade "+
				"<br>O número cinco na Missão mostra versatilidade e ousadia, sendo enérgico e amante da liberdade. Vive em busca de novidades, de novos conhecimentos, novos prazeres, e isso o faz querer viajar, conhecer novos lugares, novos costumes e novas culturas. Gosta de estudar, pois é curioso; gostando também de conversar e compreender seus semelhantes, tentando se colocar no lugar do outro e tentando ver as coisas de um modo diferente. Curioso, gosta de investigar e descobrir; tem uma excelente memória, é mentalmente versátil, e possui capacidade extraordinária para fazer diversas coisas ao mesmo tempo. Mas, da mesma forma que tem capacidade de fazer diversas coisas ao mesmo tempo, também tem forte tendência em abandonar essas coisas no meio do caminho, o que o faz ter muitos inícios e poucos fins.  Por ser curioso e gostar de pesquisar e investigar tudo, essa tendência em abandonar coisas no meio do caminho é comum, pois facilmente perde seu interesse por uma coisa e já inicia outra, o que o torna dispersivo, inquieto e instável, sendo comum viver mudando de atividades, pois sempre aparece algo novo, mais prazeroso e interessante para se fazer. Mesmo que normalmente seja muito atraente ao sexo oposto, é inconstante, indeciso e volúvel; devido a esses fatores é alguém que não dura muito tempo em uma relação, tendo vários relacionamentos ao longo da vida. Por sua ousadia e grande capacidade de adaptação, pode assumir responsabilidades, que geralmente surgem naturalmente, levando-o a assumir posições de prestígio ou autoridade. Inteligente e dotado de ideias originais, pode querer seguir carreiras filosóficas, educacionais ou de pesquisas científicas. Generoso e gentil, tem grande capacidade em lidar com pessoas, conseguindo perceber e aproveitar as oportunidades que lhe surgem. Não gosta de receber ordens e por isso prefere cargos de chefia; embora trabalhar para si próprio seja mais produtivo, pois gosta da liberdade para fazer tudo ao seu modo.  Humanitário e espiritualista, pode desejar fazer atividades religiosas, místicas, esotéricas ou obras sociais. Também pode optar pelo mundo do entretenimento, graças a seu senso dramático natural. Precisa seguir sua própria intuição e evitar as opiniões alheias.  Como gosta de movimento, estará em constante busca de novidades, novos lugares, novas culturas, novos horizontes, novas amizades, novos prazeres, novas paisagens. Amante da liberdade, deve usá-la com responsabilidade. Para ser bem-sucedido deve ouvir sua própria intuição; escute e respeite as opiniões alheias, reflita sobre elas, mas siga apenas sua intuição.  Por ser atraente e magnético, atrairá muitas pessoas para perto de si, o que lhe fará ser vítima de ciúmes ou intrigas. "+
				 
				"<br>LADO POSITIVO Versátil, inteligente, estudioso, comunicativo, compreensivo, adaptável, progressista, responsável, magnético, ousado, rápido, intuitivo, curioso, místico e sociável.  "+
				 
				"<br>LADO NEGATIVO Dispersivo, instável, inquieto, procrastinador, volúvel, inconsistente e excessivamente confiante.";
	        } else if(mi7 == 6) {
	        	var emi = "Missão 6 – Amor "+
				"<br>O número seis na Missão mostra a família como prioridade, sendo o centro de sua preocupação e inspiração. É uma pessoa prática, equilibrada, íntegra, leal, honesta, confiável, sentimental, compreensiva, bondosa, amorosa e alegre, estando sempre disposta a ajudar os que precisam de sua ajuda.   Como o amor é a base dessa vibração, é uma pessoa que ama as crianças, os idosos, os familiares e principalmente os filhos (se os tiver), e esse amor se estende aos amigos e em alguns casos, até aos inimigos. Por ser geralmente sensível, consegue sentir as dores e sofrimentos alheios, o que o faz sentir um desejo em ajudar tal pessoa, mesmo que a mesma não tenha pedido sua ajuda; isso pode ocasionalmente te levar ao desequilíbrio emocional, portanto, tente manter seu equilíbrio emocional diante dos problemas alheios. Em alguns casos, pessoas saberão de sua compaixão e usarão de sua boa vontade, explorando e abusando da sua prestatividade.  Prefere a vida doméstica e estável, mesmo que deseje viajar e conhecer o mundo, é o conforto do lar e da família que o fazem ficar realizado. Embora seja amoroso, pode ter certa dificuldade em expressar seus sentimentos, devendo mostrar isso aos que ama. Evite priorizar apenas seu próprio bem-estar, inclua também os familiares e mais próximos. Aceite as pessoas como elas são, sem tentar mudá-las, pois cada um está em um nível de consciência diferente, devendo ter suas experiências únicas em cada etapa evolutiva. Por ter compaixão e compreensão, será mais feliz em profissões onde possa ter alta responsabilidade, harmonizando e organizando as coisas, elevando os conhecimentos dos outros, como na área do ensino, treinamento e conhecimento. Também ficará realizado com atividades de ajuda e caridade, com trabalhos remunerados ou voluntários em instituições de caridade. Trabalhos ligados ao esoterismo ou terapias ocupacionais também lhes farão ficar satisfeito consigo mesmo, pois gosta de ajudar ao próximo. Fora o campo da ajuda humanitária, qualquer função que exija responsabilidade, liderança, integridade, justiça e harmonia serão bem desenvolvidas. Poderá ser explosivo, principalmente quando é posta sua capacidade profissional ou honestidade à prova, porém, esquece rápido as ofensas e perdoa todos os envolvidos nas calúnias. A missão 6 é a missão do amor universal, da compaixão e fraternidade; caso se desvie dessa missão na juventude, na maturidade irá sentir o peso dessa negligência, vindo a culpar os demais por suas decepções e fracassos, porém, isso não significa que será materialmente fracassado, mas sentirá que fracassou como pessoa. Se desejar obter êxito social e ser popular, deve se dedicar ao estudo e prática religiosa ou esotérica, pois tem o dom do convencimento, levando facilmente as pessoas a te seguirem em suas ideias; deve apenas ter cuidado para não cair no fanatismo. Por ter gosto pelo conhecimento, irá preferir companhias inteligentes e enérgicas, das quais possa dialogar e evoluir seus conhecimentos. Nos relacionamentos aparenta ser forte e enérgico, mas como também é sensível, pode vir a ficar entediado ou inquieto. "+
				 
				"<br>LADO POSITIVO Compaixão, compreensão, solidariedade, fraternidade, humanitarismo, sinceridade, honestidade, lealdade, confiabilidade, firmeza, idealismo, percepção, praticidade, companheirismo, generosidade, gosto pela vida doméstica e dons artísticos. "+
				 
				"<br>LADO NEGATIVO  Ansiedade, impaciência, inquietação, teimosia, timidez, perfeccionismo, egocentrismo e desconfiança.  ";
	        } else if(mi7 == 7) {
	        	var emi = "Missão 7 – Sabedoria "+
				"<br>O número sete na Missão mostra a sabedoria como a chave principal para o seu desenvolvimento. Precisa buscar conhecimento e sabedoria para evoluir, e esses, por sua vez, são tanto a nível educacional como também filosóficos e espirituais, adentrando pelos conhecimentos esotéricos, místicos e religiosos. É sociável, carismático, generoso, charmoso e compreensivo, embora não aparente ser exatamente assim. O 7 é um número enigmático, pois mostra uma pessoa profunda, calada e introspectiva, mas, também poderá ser falante, cativante e sociável. Devido ao seu jeito diferente de ser, poderá expressar uma aparência de superioridade e altivez, levando a maioria das pessoas a afastarem-se de si, logo que o veem; porém, após o primeiro contato, percebem que é uma pessoa compreensiva e sábia, fazendo com que todos desejem estar em sua companhia. A vibração 7 é também a vibração da perfeição, sabedoria, sensibilidade e qualidades psíquicas. Deverá aprender a ter equilíbrio entre o mundo material e espiritual, aprendendo também a lidar com dinheiro, sabendo ganhá-lo e também administrá-lo com sabedoria. Geralmente vive um dilema no setor financeiro, pois ao mesmo tempo em que é desprendido de desejos materialistas, deseja levar uma vida confortável, e essa “oscilação” entre viver o lado material e espiritual trará desequilíbrio emocional, caso não saiba lidar corretamente com o lado financeiro, ajustando-se e equilibrando-se materialmente e espiritualmente. Aprender a lidar com o lado financeiro e espiritual em equilíbrio é outra parte de sua missão, devendo evitar ser negligente nesse sentido. Precisa buscar a introspecção, o silencio e a meditação, para assim poder encontrar seu autoequilíbrio pessoal. Os estudos e pesquisas universais também favorecerão sua busca pelo autoconhecimento. Possui forte intuição, boa percepção, é observador e quieto, o que o faz ter diversas visões e percepções da mesma coisa ou situação. Dependendo do seu grau de evolução, poderá ser tanto muito apegado ao lado espiritual como ao lado material, devendo sempre optar pela evolução do espírito. Geralmente é autoritário e não gosta de receber ordens, devendo evitar qualquer trabalho subalterno, saindo-se melhor em atividades voltadas ao saber, como ser educador, pesquisador, historiador, explorador, ou como orador, guia espiritual e pregador. Como gosta de dar conselhos e ser consultado pelos demais, também poderá ser excelente escritor, atuando no segmento de autoajuda, esoterismo, metafísica, misticismo ou religião. Também poderá exercer qualquer atividade que lide com pessoas, ajudando-as de alguma forma a evoluírem. Na maturidade poderá tornar-se introvertido e meditativo, sendo importante que busque ficar cercado de pessoas inteligentes e que, de preferência, compartilhem os mesmos ideais que os seus. É independente, pensa grande, gosta de estar sempre em movimento e é voltado para o sucesso. Essas suas convicções e desejo em servir e ajudar o próximo, podem levá-lo a dedicar-se a atividades que beneficiem o bem-estar comum, auxiliando a evolução humana. Precisa controlar suas emoções, evitando agir compulsivamente, sendo extremista. Deve buscar conhecer a essência das coisas, dedicando-se a elas. Precisa controlar seu autoritarismo e tendência a se introverter, evitando que isso a prejudique socialmente. Valorize todos os aprendizados da vida, tanto os valores interiores como exteriores. Busque o equilíbrio entre a busca pela evolução espiritual e os bens materiais ou financeiros, não sendo nem materialista e nem negligente com as questões materiais. "+
				 
				"<br>LADO POSITIVO Sabedoria, conhecimento, busca pela evolução espiritual, compreensão, compaixão, generosidade, sensibilidade, sociabilidade e carisma. "+
				 
				"<br>LADO NEGATIVO Autoritarismo, altivez, frieza, quietude, isolamento, introspecção, materialismo, mesquinhez, dualidade, oscilação de comportamento, sentimento de superioridade, preconceito com as pessoas que detém pouco conhecimento e instrução, excesso de independência e egoísmo. ";
	        } else if(mi7 == 8) {
	        	var emi = "Missão 8 – Justiça "+
				"<br>O número oito na Missão mostra uma pessoa organizada, dedicada aos negócios, prática, direta, justa, generosa e segura de si. É o mais indicado para lidar com situações concretas e financeiras. É persistente, dotado de grande força de vontade e iniciativa. Também é observador e oportunista, não deixando escapar as oportunidades que lhe aparecem, sendo essas características ainda mais acentuadas com o passar dos anos. O progresso material é a sua principal meta; progresso esse feito com justiça, elevado senso moral e solidez. Seu maior problema enfrentado até os 45 anos (metade da vida) será a disciplina. Se até essa idade não aprender a ser disciplinado, tenderá a sofrer muito na outra metade da vida, pois as oportunidades já não serão tantas e o mesmo ocorrerá com a vitalidade, que também já não será a mesma. Se durante a primeira metade da vida tiver disciplina, sempre encontrará meios para ganhar dinheiro, seja trabalhando com afinco e esperteza ou, seja obtendo lucro através do trabalho dos outros, porém, sempre trabalhando em algo e obtendo rendimentos. Quando deseja algo, contorna os pormenores que surgem para impedir seu objetivo, preferindo evitar qualquer tipo de confusão ou discussão. Nas amizades, é um amigo fiel, porém, quando percebe que a amizade é interesseira, se distancia rapidamente daquela pessoa, pois não valoriza esse tipo de amizade. Profissionalmente, por estar ligado diretamente ao mundo dos negócios e por dar grande valor à riqueza material, terá mais sucesso como executivo de grandes empresas, proprietário de um complexo industrial, comerciante em geral, político ou atuando no meio jurídico. Para conseguir concretizar esses objetivos, precisará ter força de vontade, perseverança, autoconfiança, autoridade e muita energia. De forte intuição, sente o desejo em levar seus ideais e projetos a nível internacional, o que poderá conseguir, haja vista seus dons e potenciais são grandiosos e originais. Poderá ser muito feliz trabalhando em benefício da humanidade, haja vista possui um sentimento de conscientização peculiar. Com o passar dos anos, talvez apenas na maturidade ou idade avançada, compreenderá que precisa ter desapego, porém, em um nível muito mais profundo, que somente no tempo exato será compreendido. Chegado o momento certo, reconhecerá essa necessidade de desapego, passando a adquirir a liberdade interior, sentindo que seus ideais estão mais profundos e humanitários. "+
				 
				"<br>LADO POSITIVO Liderança, meticulosidade, autoritarismo, proteção, bons princípios, trabalhador, com grande poder de cura e sentimento de justiça.  "+
				 
				"<br>LADO NEGATIVO Dominador, impaciente, excessivamente autoritário e intolerante. ";
	        } else if(mi7 == 9) {
	        	var emi = "Missão 9 – Conhecimento"+
	        	"<br>O número nove na Missão mostra a busca incessante pelo conhecimento, a fim de adquirir a Sabedoria e encontrar a verdade absoluta. É universalista, tem forte generosidade e sente compaixão pelos outros. Seu desejo pessoal é o de mudar o mundo, evoluindo a espécie humana.  Busca sempre por respostas, e por vezes se frustra, pois já sabe a maioria delas. Sofre ao ver injustiças, e mesmo quando vê alguém sendo maltratado, por mais que falem que tal pessoa merece o sofrimento, não se satisfaz em ver o outro sofrendo. Como os interesses pessoais geralmente lhe trazem desapontamentos e decepções, é geralmente impessoal. Como é universalista e humanitarista, dificilmente tem êxito nos relacionamentos afetivos, já que sua parceira não compreende sua visão diferenciada do mundo. Por vezes, quando o relacionamento consegue perdurar, fica desgastado pela falta de dedicação ao relacionamento, pois, dá mais prioridades ao mundo do que a vida amorosa. Graças ao seu caráter, geralmente não é egoísta e não espera reconhecimento ou agradecimento pelas coisas boas que faz. É uma pessoa que vive tanto em prol da humanidade que acaba por esquecer-se de si mesmo. O sucesso material e profissional vem das boas e verdadeiras amizades que faz ao longo da vida. Caso sua juventude tenha sido dedicada ao altruísmo, na maturidade deve se dedicar ao ensino religioso, esotérico, espiritual ou filosófico; ou ainda, falar em público ou escrever. Na maturidade será bem procurado por sua sabedoria, pois esperam encontrar uma palavra amiga, um consolo, uma direção. Para ser feliz, deve sempre buscar ser altruísta, não importando como esteja pessoalmente. Deve buscar trazer a harmonia e a paz entre todos.  "+
					 
					"<br>LADO POSITIVO Conhecimento, sabedoria, compreensão, compaixão, generosidade, caridade, altruísmo, sensibilidade, idealismo, justiça, criatividade, magnetismo, popularidade e desapego material e sentimental.   "+
					 
					"<br>LADO NEGATIVO Falta de praticidade, excesso de preocupação, nervosismo, frustração e egoísmo.";
	        } else if(mi7 == 11) {
	        	var emi = "Missão 11 - Fé "+
				"<br>O número onze na Missão mostra que sua grande virtude é a Fé.  Esta Fé em si mesmo, não representa propriamente religiosidade, mas também a Fé nos seus ideais, propósitos, pressentimentos, projetos que elabora ou uma espécie de “sorte”.  Consciente ou inconscientemente, a Fé em alguma coisa é a sua “mola mestra” que lhe empurra para o destino.  Agindo corretamente, tem o potencial para inspirar as pessoas com seus ideais e imaginação; assim, evite investir suas energias mentais em coisas de pouca importância para não se desviar das suas metas positivas.  Quando se concentra em suas energias positivas, é capaz de obter resultados produtivos.  Cuide da sua dieta e da sua saúde e aprenda a relaxar de vez em quando.  Tem a habilidade para encantar as pessoas, mas, elas talvez não vejam que atrás da sua aparência ousada, sofre de confusão interior.  Em idade avançada, terá uma sabedoria acumulada através do desenvolvimento espiritual, da compreensão universal e do potencial místico.  Evite ser impulsivo, agir de forma extravagante ou se deixar levar por esquemas de enriquecimento rápido, investindo em planos de longo prazo.  É um diplomata por excelência e possui a rara capacidade da harmonia e compreensão.  É justo e está sempre pronto a “arbitrar” qualquer divergência entre colegas de profissão, amigos ou discórdias familiares.  É incapaz de ferir propositadamente seu semelhante e, quando isso acontece, prontamente pede desculpas e não repete mais o erro.  Com o passar dos anos, as suas capacidades de liderança ficarão mais latentes e sólidas e as oportunidades de sucesso, prosperidade e fama aparecerão e com certeza as aproveitará.  Estas características poderão levá-lo a ser um famoso orador, um renomado político ou mesmo um diplomata, incumbido de uma grande missão, principalmente de Paz, que lhe será imposta e que terá de usar de toda a sua perspicácia e habilidade para saber concretizá-la a bom termo.  A parte final da vida (após os 60 anos) será repleta de paz, harmonia e felicidade. "+

				"<br>LADO POSITIVO Equilibrado, concentrado, objetivo, entusiástico, espiritualizado, idealista, intuitivo, habilidade para cura, humanitário e grande capacidade psíquica. "+
				 
				"<br>LADO NEGATIVO Complexo de superioridade, excessivamente emotivo, egoísta, dominador e magoa-se facilmente.";

	        } else if(mi7 == 22){
	        	var emi = "Missão 22 – Esperança  "+
				"<br>O número vinte e dois na Missão mostra altruísmo e sabedoria. É intuitivo e mentalmente arguto, preferindo tomar suas decisões sozinho. Realista e humanitário, poderá usar sua força para ajudar e dar apoio a quem precisa. Por ter habilidade social e certo carisma natural, consegue fazer muitos amigos e ter muitos admiradores. Possui consideração pelas amizades e gosta de companhia de pessoas que promovam diversão e o inspirem a ser aventureiro. Se sente mais realizado quando está ao lado das pessoas que ama. Não mede esforços para viver em paz e harmonia, mesmo que isso lhe custe sacrifícios ou concessões. Essa vibração aponta que passará por inúmeros testes, sejam amorosos, financeiros ou existenciais. Como essa vibração sugere que deve ser um espírito evoluído, se assim o for, compreenderá que tais testes nada mais são do que situações que lhe permitem evoluir cada vez mais, saindose bem de todas elas. Profissionalmente, se tiver consciência evolutiva, conseguirá ser bem-sucedido em qualquer atividade ou profissão, mas, principalmente nas que ajudem na evolução da humanidade, como política, relações públicas, filosofia, filantropia, medicina, ciências, esoterismo e religiosidade. Precisa ser prático e idealista, buscando atuar em ações que ajudem na construção de um mundo melhor. Precisa evitar ser sonhador e irrealista. Como possui sensibilidade, deve evitar as bebidas alcoólicas, o cigarro e drogas em geral. "+
				 
				"<br>LADO POSITIVO Sabedoria, altruísmo, humanitarismo, universalidade, pragmatismo, praticidade, habilidade, honestidade, cordialidade, forte intuição, liderança, capacidade de organização e boa resolução de problemas. "+
				 
				"<br>LADO NEGATIVO Autoritarismo, preguiça, procrastinação, egoísmo, nervosismo, complexo de inferioridade, vitimismo, desorganização, desonestidade e irrealismo. ";
	        } 

	                        //Harmonia Conjugal

	                        if(mi7 == 11 || mi7 == 22) {
	                        	var hc9 = mi8.split('');
	                            var hc10 = parseInt(hc9[0]);
	                            var hc11 = parseInt(hc9[1]);
	                            var hc7 = hc10+hc11;
	                        } else {
	                        	var hc7 = mi7;
	                        }

	                            if(hc7 == 1) {
	        	var ehc = "Número 1 "+
				"<br>Este número é o do idílio (amor poético), mas a atração deve ter uma base intelectual.  Como este número também estimula a variedade, não será muito fácil chegar-se a uma união duradoura, pois haverá a tentação de se tratar de duas coisas ao mesmo tempo. Além disso, a tendência intelectual prejudicará o fogo da paixão que procura em vão.  Os casamentos podem ocorrer de repente, e também podem ocorrer encontros quando estiver fazendo uma viagem bem longe de casa ou em um centro de estudos.  Deve sempre ter cautela na vida matrimonial, pois pode haver o perigo de aventuras extraconjugais provocadas pelo tédio ou pela falta de liberdade mental.";
	        } else if(hc7 == 2) {
	        	var ehc = "Número 2 "+
				"<br>Este número é discriminador na escolha de um cônjuge, principalmente por causa do seu acentuado interesse pelo conforto e pela estabilidade.  A sugestão pode desempenhar um papel importante na sua vida e deve ter cuidado para impedir críticas indevidas por parte de parentes ou amigos, ou seja, interferência na sua vida amorosa.  Pode haver também amizades secretas, de natureza puramente platônica, que devem ser encaradas com cautela, a fim de serem evitadas as desavenças conjugais.  Há de querer uma pessoa inteligente, mas que seja acima de tudo prática e capaz de garantir a segurança financeira.";
	        } else if(hc7 == 3) {
	        	var ehc = "Número 3 "+
				"<br>Às vezes tem a infelicidade de conhecer as pessoas ideais demasiadamente tarde, quando normalmente já estão comprometidas ou casadas e, se não tiver cuidado, pode tornar-se um lado de um triângulo amoroso, em vez de esperar outra pessoa que esteja livre.  É muito idealista para compartilhar seu casamento, mas o seu espírito de sacrifício pode ser explorado maldosamente por aqueles em quem confia.  Possivelmente, haverá um ou mais de um 'quase erro', porém tem a proteção que impede de se prender a uma pessoa de gênio insuportável ou de mau caráter.  Se deixar agir a sua intuição, a sua escolha será correta, pois compreende muito bem as motivações das pessoas e, via de regra, escolherá alguém cujos interesses combinem com os seus, encontrando então a pessoa ideal para toda a vida.";
	        } else if(hc7 == 4) {
	        	var ehc = "Número 4 "+
				"<br>Sentirá uma forte atração pelo casamento, devido à sua natureza emocional e afetiva, mas nem sempre terá a necessária discrição, e a sua escolha poderá lhe acarretar dificuldades.  Seu caminho será ainda mais dificultado pela inveja e despeito de outras pessoas, e também por sua tendência de julgar excessivamente os outros pela aparência.  No casamento, embora procure uma pessoa ativa e dominadora, poderá haver atritos conjugais, com certa frequência, se houver muitas exigências de sua parte. ";
	        } else if(hc7 == 5) {
	        	var ehc = "Número 5 "+
				"<br>Este número acarreta viagens, mudanças e variedades.  É quase certo que se casará e se separará mais de uma vez, devido à inquietação e gosto pela mudança.  Por outro lado, os dois cônjuges, mesmo separados, podem e normalmente mantêm negócios juntos, pois existe uma tendência à amizade.  Não costuma ser uma pessoa muito seletiva em seus relacionamentos, principalmente até os 25 anos e com isso vive trocando de relacionamento constantemente, mas, sempre à procura da pessoa ideal.  Obstáculos e atrasos serão comuns na juventude, e o aconselhável é o casamento depois de trinta anos, e de preferência com uma pessoa da mesma idade ou até um pouco mais velha.";
	        } else if(hc7 == 6) {
	        	var ehc = "Número 6 "+
				"<br>Embora não seja precoce nos relacionamentos, devido a timidez e pouca expressão, não deixa de ser intimamente ardente. No entanto, quando esse ardor interior é provocado, poderão haver períodos de exaltação que, se não tiver cuidado, acarretarão em uniões não muito satisfatórias e que se terminarem em casamento, trará possivelmente a infelicidade. O 6 é um número não muito forte, apresentando certa vacilação e variedade, e as pessoas regidas por ele devem ter muito cuidado para não desejarem novas companhias capazes de prejudicar o estado conjugal, em particular quando se encontram afastadas do outro cônjuge.  Se o casamento ocorrer depois de 30 anos de idade haverá mais estabilidade. ";
	        } else if(hc7 == 7) {
	        	var ehc = "Número 7 "+
				"<br>A pessoa regida por este número é muitas vezes considerada namoradeira e até volúvel, mas, isso não é totalmente verdade.  Embora não deva se casar muito jovem, ou seja, antes que o seu caráter e os seus gostos estejam bem pronunciados, muitas vezes isso acontece e, em consequência, normalmente esses relacionamentos duram pouco.  É tão ativa mental e fisicamente, que a sua existência é muito variada e costuma conhecer um número muito maior de pessoas do que a maioria conhece, com exceção do cinco.  Frequentemente se casa mais de uma vez, e têm muitos casos amorosos, principalmente durante a vigência do casamento.  Haverá muitas separações de pessoas amadas, amigas, e até mesmo mortes prematuras de pessoas queridas.  Em via de regra têm muita responsabilidade desde a juventude.";
	        } else if(hc7 == 8) {
	        	var ehc = "Número 8 "+
				"<br>O número 8 reflete a sinceridade e justiça, por isso, a pessoa regida por este número se casa para toda a vida, pois é sincera e honrada, porém, curiosamente muitos dos namoros são desfeitos antes do casamento, mas sempre por falta de sinceridade da outra parte.  Se sofrer tal decepção pode custar a se recuperar e, se enviuvar depois de um casamento feliz, a pessoa regida por este número raramente se casa de novo.  A religião e a filosofia desempenham um papel importante em sua vida e embora o impulso sexual seja forte, há um sentimento de escrúpulo que evita a indulgência com o sexo antes do casamento.  O companheirismo é uma questão de importância vital para essas pessoas e, como o namoro, geralmente conduzido com muito critério e bom senso, o desempenho de atividades conjuntas, fará feliz e duradouro o casamento.";
	        } else if(hc7 == 9) {
	        	var ehc = "Número 9 "+
				"<br>O casamento será a aspiração suprema e constante, e a ele sacrificará todos os pensamentos, esperanças e aspirações, desde muito jovem.  Na juventude, a tendência é de gostar e até namorar com pessoas mais velhas, o que poderá lhe acarretar alguns problemas, particularmente quando, com o correr do tempo passe a se interessar por pessoas mais jovens.  Deve tomar cuidado para que os seus objetivos e atividades profissionais sejam compatíveis com as da pessoa amada, pois, do contrário, poderá sofrer decepções e aborrecimentos. ";
	        }

	        



	                        //Número Psiquico

	        var p0 = document.getElementById("txt2").value;
	        var p2 = p0.split('-');
	        var p3 = p2[2];
	        var p4 = p3.split('');

	        var p7 = 0;


	                for(y=0; y < p3.length; y++) {

	                    
	                    var p5 = parseInt(p4[y]);
	                    var p7 = p7+p5;
	                    var p8 = p7.toString();

	                        if(p8.length > 1) {

	                            var p9 = p8.split('');
	                            var p10 = parseInt(p9[0]);
	                            var p11 = parseInt(p9[1]);
	                            var p7 = p10+p11;

	                        }                

	                    

	                }

	                if(p7 == 1) {
	        	var ep = "Número Psíquico 1 "+
				"<br>Esse é o Número Psíquico das pessoas nascidas nos dias 1, 10, 19 e 28 de qualquer mês. "+
				"<br>Possui generosidade, criatividade, otimismo, positivismo, honestidade e fidelidade. Tem personalidade forte e marcante, destacando-se pelo seu senso de liderança e comando. Gosta do trabalho e é eficiente no que faz, pois geralmente gosta do que exerce. Possui firmeza de ideias e propósitos, clareza de entendimento, solidez, minuciosidade e transparência em suas manifestações. Devido ao seu caráter, pode ter pouca ou nenhuma inveja, sem maldades ou rancores dos outros. Geralmente gosta de presentear ou compartilhar o que possui com os que ama. Quando se convence de que está no rumo certo, é difícil mudar de ideia, comportamento, opinião, convicção ou decisão. Tem necessidade de receber atenção e respeito, se preocupando também com os outros nesse sentido, gostando que os mesmos lhe retribuíssem. Os demais te veem como uma pessoa de sorte, afortunada em obter ajuda de pessoas importantes ou influentes. Ama a liberdade e odeia qualquer tipo de restrições, não aceitando interferências de terceiros em sua vida e principalmente em seu trabalho. Consegue dar ares diferentes as ideias já saturadas ou cotidianas, colocando sua criatividade e inventividade em ação. Possui uma estrutura física forte e dotada de grande vitalidade, realizando trabalhos árduos ou cansativos sem grandes esforços. No lado religioso, acredita que veio ao mundo com uma missão e deseja cumpri-la, mesmo que isso signifique passar por sacrifícios ou inconvenientes, já que não enxerga as intempéries como obstáculos para sua evolução. Possui muita coragem e enfrenta as dificuldades da vida sem perder o autocontrole. Tem gosto refinado e boas maneiras, abominando a desordem, a preguiça, o desleixo, o egoísmo, a bajulação, as falsas promessas, a falsa modéstia e o falso orgulho. Adora criticar os outros e detesta quando recebe essas mesmas críticas.";
	        } else if(p7 == 2) {
	        	var ep = "Número Psíquico 2 "+
				"<br>Esse é o Número Psíquico das pessoas nascidas nos dias 02, 11, 20 e 29 de qualquer mês.  "+
				"<br>Sua natureza é pacífica, compreensiva, romântica e sentimental. Possui diplomacia, gostando de um ambiente harmonioso e feliz. É gentil e cordial, por isso, vive ajudando e cooperando com os demais. Possui forte imaginação e grande capacidade inventiva, porém, por não confiar nessas suas qualidades, não põe suas ideias em prática. Sua determinação é fraca, por isso, precisa ter mais fé em si mesmo. Poderá ser muito influenciável, vivendo conforme o meio em que convive. Como a vibração 2 é inconstante, poderá sofrer com essa característica de sua personalidade, principalmente se isso afetar seu lado afetivo e emocional, o que gera envolvimentos emocionais complexos e conturbados. Embora seu lado afetivo possa ser problemático, busca estar sempre em harmonia com a pessoa amada, evitando discórdias e conflitos, porém, isso pode te prejudicar à longo prazo, afinal, você sempre acabará se excluindo para agradar a outra pessoa, deixando de fazer aquilo que deseja. Esse seu dom de harmonizar também se reflete no meio em que vive, sendo comum que sua presença seja necessária para apaziguar ambientes hostis, e isso se deve à sua capacidade de diplomacia e compreensão. Por vezes, sua imaginação excede os limites, passando a ter excesso de fantasias, o que pode trazer aborrecimentos, já que poderão dizer que você sonha alto demais. Precisa reconhecer seus erros e assumir o autodomínio, mudando suas atitudes errôneas para sair do padrão negativo. Embora possua forte intuição, é necessário pensar bem antes de agir. "+
				 
				"<br>Observação: Quem nasce no dia 11 possui rapidez nas respostas, sendo otimista e capaz de guiar as outras pessoas em situações difíceis. Se tiver boa orientação e apoio adequado, poderá alcançar prosperidade material. ";
	        } else if(p7 == 3) {
	        	var ep = "Número Psíquico 3 "+
				"<br>Esse é o Número Psíquico das pessoas nascidas nos dias 3, 12, 21 e 30 de qualquer mês. "+
				"<br>Possui independência, audácia, disciplina, autoconfiança, dedicação, ambição, criatividade e forte comunicação, destacando-se por sua popularidade. Tem bom senso de humor, vive alegre e esbanja sua alegria por onde passa. Gosta de ambientes descontraídos, cheios de comunicação e arte. Adora viajar e desfrutar das delícias que a vida pode lhe oferecer. Geralmente gosta do trabalho, é independente, possui observação lógica e ótimo raciocínio. Como possui o dom da comunicação, se expressa sempre com clareza, podendo aproveitar esse dom para escrever, falar, apresentar, interpretar ou atuar na área da educação. É consciente de suas responsabilidades e tem mente aberta, o que faz ter uma boa compreensão da vida. Deseja vencer na vida e por isso não mede esforços para conquistar seus objetivos. Sabe que tudo é fruto do trabalho bem executado e, por isso, é bem consciente do que é necessário se fazer hoje para garantir seu futuro amanhã. Possui forte magnetismo pessoal, atraindo várias pessoas, principalmente as do sexo oposto. Normalmente é fiel e leal aos relacionamentos afetivos, gostando de compartilhar suas alegrias com a pessoa amada.  Gosta de dedicar-se às boas causas, sendo comum que participe de atividades sociais. Por ter bom coração, ajuda a todos que necessitam, o que pode incluir até rivais ou inimigos. Não gosta de receber ordens, preferindo cargos de posições elevadas ou chefia. Vislumbra projetos grandes e acaba preferindo agir por conta própria, montando seu negócio e/ou projeto de forma independente. Possui certa fraqueza por sexo, devendo selecionar bem com quem irá se envolver. Tem como lado negativo o excesso de otimismo, ambição, extravagância e ostentação.";
	        } else if(p7 == 4) {
	        	var ep = "Número Psíquico 4 "+
				"<br>Esse é o Número Psíquico das pessoas nascidas nos dias 4, 13, 22 e 31 de qualquer mês. "+
				"<br>Possui obstinação, coragem, determinação e força de vontade. É confiável, possui poucas amizades, porém, as que possui são quase sempre vitalícias.  É paciente, esperando que tudo ocorra no tempo certo, mesmo quando se trata de momentos difíceis. Em uma discussão ou debate sério, sempre dá seu apoio às partes oprimidas ou injustiçadas.  Um certo extremismo lhe coloca sempre na posição de oposição, principalmente quando se trata de questões envolvendo governo ou o poder de um modo geral.  Não gosta da mediocridade, ou está no topo ou na base, nunca se colocando no meio-termo.  Têm que lutar para crescer e se desenvolver; enfrentando obstáculos constantes em qualquer trabalho que empreenda, seja ele grande ou pequeno.  As críticas e oposições são constantes em toda a sua vida e fazem parte de seu aprendizado.  Pelo fato de seu ponto de vista quase sempre divergir, e de se ocupar em defender os fracos e oprimidos das injustiças, acaba por criar problemas para si mesmo, atraindo inimigos ocultos.  Sua intenção é sempre pura, e sua natureza é pacífica e diplomática, preferindo não se envolver em brigas.  Geralmente gosta de organização e trabalhos mais metódicos, vindo a ser excelente naquilo que faz com amor e maestria. Interessa-se por todos os tipos de reformas – ambientais, sociais, comunitárias e domésticas.  Por esse interesse, poderá sentir atração pela política, organizações humanitárias, esotéricas, espirituais ou onde puder liderar as ações que causam grandes transformações.  Por sua natureza rebelde, instintivamente se revolta contra as regras e regulamentos que impossibilitem suas ações e muitas vezes não hesita nem mesmo em infringir a lei.  Possui bom gosto pelas artes, adora visitar exposições, frequentar teatro, concertos, e adora avaliar criticamente esses eventos.  Pode ser excelente crítico de artes, mas suas ideias não primam pela clareza.  Sente forte incompreensão e por ter um temperamento tão reservado, não expressa suas verdadeiras emoções e sentimentos, e isso poderá lhe causar problemas cardíacos.  Deve desenvolver maneiras que capacitem expressar livremente seus sentimentos, e manifestá-los com sinceridade. Seu lado negativo é o excesso de teimosia e ceticismo. ";
	        } else if(p7 == 5) {
	        	var ep = "Número Psíquico 5 "+
				"<br>Esse é o Número Psíquico das pessoas nascidas nos dias 5, 14 e 23 de qualquer mês.  "+
				"<br>Sua natureza é livre e aventureira. É amante da liberdade, da diversão e da alegria, gostando de viajar e conhecer o mundo. Gosta de explorar e experimentar coisas diferentes, aventurando-se nas novidades que a vida lhe oferece, porém, caso não possua evolução espiritual, poderá cair nas paixões carnais, o que inclui a promiscuidade e uso de drogas. Como gosta de novidades, é comum que goste de estudar, fazer pesquisas e estar sempre por dentro das novas tecnologias. Sua mente é ativa e, por isso, é natural que esteja sempre com uma ideia nova em mente. Também possui forte dinamismo, que unido à sua mente ativa, te fazem estar em constante movimento, porém, se faz necessário ter dias de descanso para repor suas energias. É comum que seu excesso de movimento te faça sentir cansaço, e quando isso acontecer, busque relaxar um pouco, afinal, não podemos ficar 24 horas ligados. Possui mente rápida, porém, se tomar decisões por impulso, poderá sofrer péssimas consequências. Tem uma forte tendência a correr riscos e, quando o assunto é dinheiro, poderá se envolver em jogos de azar na esperança de obter enriquecimento rápido. Todavia, se seu caráter não for coerente, também poderá se envolver com fraudes e transações ilícitas para conseguir êxito material. Precisa pensar menos no hoje e fazer planos para o futuro, o que envolve o lado financeiro e material também. Consegue fazer muitas amizades rapidamente, porém, essas não duram muito. Em uma conversa, consegue prender a atenção dos demais, vindo a responder perguntas antes mesmo de serem formuladas. Devido ao desejo de movimento, poderá ser inconstante, com tendência a insatisfação de modo geral. Independente e exigente, gosta de suas coisas ao seu modo, aborrecendo-se quando mexem em suas coisas e/ou alteram sua ordem. Adaptável por natureza, tem grande capacidade de entrosamento e empatia, tornando-se criança ao estar com uma criança, um adulto ao estar com um adulto e, ao estar com pessoas mais velhas, descobre sua sabedoria. Se tiver a oportunidade de viajar e conhecer novas culturas, ampliará significativamente seus conhecimentos através dessas novas experiencias. Precisa equilibrar suas emoções e não ser extravagante. "+
				 
				"<br>Observação: Quem nasce no dia 23 geralmente é uma pessoa mais afortunada.";
	        } else if(p7 == 6) {
	        	var ep = "Número Psíquico 6 "+
				"<br>Esse é o Número Psíquico das pessoas nascidas nos dias 6, 15 e 24 de qualquer mês. "+
				"<br>Sua natureza é magnética, juvenil, delicada e suave no falar. É amante do luxo, possui gosto refinado, adora viajar e ama as artes.  Procura sempre agradar a pessoa amada, permanecendo ao seu lado em quais quer circunstâncias. Atrai facilmente pessoas do sexo oposto, obtendo amor e respeito dessas. Gasta liberalmente, é sociável e têm oportunidade de conhecer gente bonita e interessante.   Têm plena consciência de sua aparência física e procura se vestir de modo a estar sempre apresentável e atraente.  Abomina a feiura, a sujeira, o desregramento e a desordem.  Gosta de manter a sua casa limpa e em ordem, gostando também de decorar seu lar, sala de trabalho ou escritório. Não gosta de permanecer em lugares tumultuados e não dá início a discussões, evitando-as ao máximo; mas, se alguém começa uma alteração ou confusão, foge da situação, procurando uma forma de apaziguar e esclarecer o ocorrido. Possui rara inteligência e habilidade de ouvir, sabendo das mais secretas revelações das outras pessoas sem muito esforço, sendo capaz de guardar esses segredos.  Pensa muito antes de agir, o que lhe dá tempo para pensar, apreciando esse hábito da morosidade, acreditando que é devagar que se vai longe.  Não gosta que alguém vá contra a sua vontade, no entanto, não é impositivo e nem exigente; podendo guardar seus sentimentos e ocultar a raiva sob um sorriso encantador.  Se emociona quando presencia o sofrimento de seus familiares, principalmente quando são os pais e procura fazer de tudo para ajudá-los.  Confia muito nos membros da família e nos amigos.";
	        } else if(p7 == 7) {
	        	var ep = "Número Psíquico 7 "+
				"<br>Esse é o Número Psíquico das pessoas nascidas nos dias 7, 16 e 25 de qualquer mês.  "+
				"<br>Sua natureza é misteriosa, romântica e sentimental. Possui bom coração, nobreza de alma e bom caráter. Geralmente gosta de estudar, deseja aprender tudo sobre a vida, como é o seu funcionamento e almeja desvendar todos os seus mistérios do universo.  Por gostar desse clima de mistério e investigação, por vezes, acaba entrando no mundo do esoterismo em busca dos mistérios mais profundos e ocultos. Possui uma curiosidade benéfica, já que deseja aprender sobre aquilo que desperta seu interesse. Gosta de bons diálogos, pois é deles que extrai ainda mais conhecimentos, já que acredita que pode aprender um pouco da experiência de cada pessoa com quem interage. O lado espiritual e religioso tende a ser mais aguçado, porém, poderá também ter certo ceticismo em determinados casos. Gosta de ser original e independente, expressando isso em seu caráter único e enigmático. Possui uma mente revolucionária e uma essência filosófica, criando assim uma individualidade única e peculiar de sua personalidade. Consegue, com maestria, dar uma versão nova e atualizada de verdades e valores já ultrapassados e saturados pelo tempo. A indecisão faz parte de sua vida, devendo sempre contorná-la. O comportamento temperamental, inquieto, indeciso e até destrutivo pode ocorrer em decorrência dos fracassos e tentativas malsucedidas de obter êxito, porém, como acredita que a chave para o sucesso está nas experiências dos fracassos sofridos, coleciona-os com facilidade, pois consegue extrair deles o seu aprendizado empírico. Amante da justiça, da liberdade individual e pessoal, não tolera injustiças. Tem o dom natural de mobilizar a opinião pública em favor de seus argumentos, incluindo adversários e opositores que são obrigados a concordar com seu aprimorado ponto de vista. E em vista de seus argumentos, poderá obter êxito quando se utilizar de sua oratória, já que tem o dom do convencimento. Acredita na coexistência pacifica e pode se adaptar a todo e qualquer ambiente desconhecido. Ama a natureza e sempre que tem oportunidade faz viagens. Devido ao seu conhecimento e observação, pode destacar-se na escrita, poesia, pintura ou qualquer meio no qual possa expressar suas ideias. Possui excelente memória e é flexível, o que favorece as discussões sobre qualquer tipo de assunto. Gosta de dar conselhos a quem necessita de orientação e apoio. Mantem sua saúde física e mental através de seu estilo de vida regrado e organizado, mesmo que deixe transparecer o contrário. "+
				 
				"<br>Observação: Dessas pessoas acima, as mais afortunadas são aquelas nascidas no dia 25 – Dia do Progresso. ";
	        } else if(p7 == 8) {
	        	var ep = "Número Psíquico 8 "+
				"<br>Esse é o Número Psíquico das pessoas nascidas nos dias 8, 17 e 26 de qualquer mês.  "+
				"<br>Sua natureza é misteriosa. Possui um ar de autorrealização e riqueza, mesmo que não possua grandes posses. Gosta da segurança material e geralmente gosta de trabalhar para manter um padrão de vida confortável. Devido à sua determinação, consegue tornar possível o que era impossível, já que não sossega até obter o que quer. Poderá sofrer com muitos fracassos, todavia, não é fácil desistir de seus objetivos. Geralmente prefere agir só, evitando pedir ajuda, já que gosta de agir ao seu modo. Sua mente é estratégica e analítica, porém, fazer com que os outros entendam sua forma de pensar é uma tarefa árdua e, assim, é natural que sofra com a incompreensão dos outros, o que inclui familiares e amigos. Sua personalidade poderá ser equilibrada, séria, reservada, introspectiva, ponderada, profunda e, às vezes, até melancólica. Não é muito de gostar de brincadeiras, e isso se deve ao seu senso de responsabilidade e seriedade. Possui grande sinceridade e caráter forte, por isso, não possui muitos amigos, porém, é fiel aos poucos que possui. Sua determinação e responsabilidade unidas à sua capacidade de comando te proporciona o respeito dos demais, favorecendo os cargos de liderança e chefia. Quando é necessária uma voz ativa, é comum que seja você quem dirá o que deve ser feito. Embora busque estabilidade, sua vida é inconstante e imprevisível, assim, essas mudanças exigem que você esteja sempre se adaptando à uma nova realidade. Quando se zanga com alguém, poderá ir até as últimas consequências para derrota-la ou subjugá-la, porém, age com paciência e estratégia, atacando no memento certo, o que garantirá sua vitória. Como o 8 está ligado ao êxito material, é natural que não se contente com pequenos sucessos, pois, acredita que o trabalho duro é capaz de gerar grandes resultados, o que geralmente ocorre, afinal, possui forte poder de realização. Como geralmente é materialista, obter sua segurança financeira é primordial. É contra a hipocrisia e a falácia. ";
	        } else if(p7 == 9) {
	        	var ep = "Número Psíquico 9 "+
				"<br>Esse é o Número Psíquico das pessoas nascidas nos dias 9, 18 e 27 de qualquer mês.  "+
				"<br>Sua natureza é universalista. Possui ambição, coragem e força de vontade, lutando pelos seus objetivos até alcança-los. Aprecia a liberdade e a sinceridade, e embora possua um espírito esportivo, gosta da competitividade e busca conquistar a vitória. Possui natural inquietação, o que te faz buscar várias atividades ao mesmo tempo. Não gosta de discussões e nem se lastima com os problemas que enfrenta. Seu otimismo e independência te fazem buscar pelo que almeja, assim, prefere fazer a ter que esperar pela vontade alheia. Poderá ter forte impulsividade, que deve ser controlada. Por vezes extremista, acredita que irá chocar e surpreender o mundo com seus ideais e ousadia, porém, isso pode trazer um fim trágico; mas, mesmo correndo riscos, não sente medo da morte. Profissionalmente é responsável, assim, não aceita receber críticas e nem que interfiram em seu trabalho. Todavia, gosta de reconhecimento, fazendo sua autopromoção. Na juventude é comum que enfrente oposições e dificuldades, precisando suportar todo o tipo de provocação para impor sua autoridade e conquistar o respeito dos demais, seja na sociedade, no seio familiar ou profissionalmente. Geralmente o sucesso vem após os 40 anos, depois de muitas lutas e investidas. Possui uma natureza dominadora e por vezes inflexível, o que gera ressentimentos. Pode ter uma falsa aparência de severidade, rigidez e de ser inabalável, porém, por dentro possui doçura, sensibilidade, compreensão e compaixão. Geralmente possui capacidade e habilidade administrativa, principalmente quando tem bom senso de organização. Como aprecia cumprir com seus objetivos, caso atue num cargo elevado não medirá esforços para conquistar o primeiro lugar em seu segmento. Caso contrário, se não houver reconhecimento pelo seu trabalho ou as chances de crescimento forem nulas, poderá sentir desinteresse e não atuar como deveria. Por ser uma vibração voltada ao sucesso, chegar ao topo é uma questão de escolha e determinação. Para ser feliz precisa evitar a cólera, arrogância, agressividade e altivez. ";
	        }

	                //Lição Cármica

	        var lc0 = document.getElementById("txt1").value;
	        var lc1 = lc0.toLowerCase();
	        var lc2 = lc1.split('');
	        var nome = [];
	        var carmica = [1, 2, 3, 4, 5, 6, 7, 8, 9];

	        
	                for(y=0; y < lc2.length; y++) {

	                    
	                    var lc5 = lc2[y];
	                    var lc6 = letras[lc5];
	                    var del = carmica.indexOf(lc6);

	                    if( del > -1 ) {
	                    	carmica.splice(del, 1);
	                    }

	                    if (carmica.length == 0 ) {
	                    	carmica = "Não possui.";
	                    }

	                }

	                /*carmica[0] = "Lição Cármica 1 "+
					"<br>Um dos aprendizados importantes em vidas passadas foi lidar corretamente com o individualismo.  "+
					"<br>Como houve negligência desse aprendizado, na vida atual ele reaparece para ser aprendido, sob pena de sofrer com as consequências negativas por ele trazidas.  "+
					"<br>É preciso eliminar essa falta negativa em sua personalidade para poder seguir em sua evolução espiritual com harmonia. "+
					 
					"<br>Quais foram suas faltas no passado: "+
					"<br>Mostra que houve falta de ambição, iniciativa, originalidade, dinamismo, coragem, independência, criatividade e autoconfiança.  "+
					"<br>Era um ser preguiçoso, altamente individualista, sem competência para cuidar e administrar seus negócios, provavelmente foi rico ou de classe social alta e não se importava com absolutamente nada a sua volta. "+
					 
					"<br>O que você trouxe desse aspecto negativo para a vida atual: "+
					"<br>Essas faltas do passado trazem na vida atual a desmotivação, dependência, preguiça e incapacidade de iniciar ou administrar seus próprios projetos ou objetivos, tendo dificuldade em iniciar coisas novas.  "+
					"<br>Teme a tomada de decisões, esperando sempre pelos outros.  "+
					 
					"<br>O que deve ser feito para eliminar essas falhas, corrigindo-as: "+
					"<br>Agora deve aprender a ser ambicioso, ter iniciativa, originalidade e deve tomar suas próprias decisões.  "+
					"<br>Precisa aprender a ser criativo, ousado, confiar mais em si mesmo e ter coragem para enfrentar novas situações.  "+
					"<br>Deve ter determinação, ser pioneiro, não ter medo de fracassar, ser independente, liderar, e não esperar por ninguém para tomar decisões que são somente suas.  "+
					"<br>Precisa confiar em sua capacidade e deve aprender a ter amor próprio.  "+
					"<br>Precisa aprender a desenvolver seu individualismo com equilíbrio, sendo ponderado quando for impor sua autoridade.  "+
					"<br>Deve buscar ser menos egoísta e mostrar seus sentimentos. ";

					carmica[1] = "Lição Cármica 2 "+
					"<br>Um dos aprendizados importantes em vidas passadas foi lidar corretamente com a colaboração, cooperação e sensibilidade emocional.  "+
					"<br>Como houve negligência desse aprendizado, na vida atual ele reaparece para ser aprendido, sob pena de sofrer com as consequências negativas por ele trazidas.  "+
					"<br>É preciso eliminar essa falta negativa em sua personalidade para poder seguir em sua evolução espiritual com harmonia. "+
					 
					"<br>Quais foram suas faltas no passado: "+
					"<br>Mostra que houve falta de cooperação e de consideração com as pessoas.  "+
					"<br>Era muito emotivo, sensível e sem autoconfiança, mas também era intolerante, impaciente, desconfiado, tímido, negligente e indisciplinado.  "+
					"<br>Não se importava com dinheiro ou bens materiais, gastando-os indiscriminadamente.  "+
					"<br>Era detalhista, pouco diplomático, sentindo-se sempre perseguido ou vítima de tudo. "+
					 
					"<br>O que você trouxe desse aspecto negativo para a vida atual: "+
					"<br>Essas faltas do passado trazem na vida atual a timidez, desconfiança, subserviência, introspecção, isolamento, medo de arriscar-se ou aventurar-se, preferindo ficar isolado e não se expor.  "+
					 
					"<br>O que deve ser feito para eliminar essas falhas, corrigindo-as: "+
					"<br>Agora deve aprender a ser diplomático, atencioso, compreensivo, paciente e tolerante, aceitando as pessoas como elas são, evitando querer mudá-las.  "+
					"<br>Deve aprender a controlar suas emoções, sendo sensível às necessidades e sentimentos dos outros.   "+
					"<br>Precisa aprender a receber ordens e deve buscar trabalhar em equipe ou grupos, não esperando receber elogios ou recompensas.  "+
					"<br>Deve aprender a lidar com dinheiro, sendo econômico, a fim de evitar problemas financeiros no futuro. ";

					carmica[2] = "Lição Cármica 3 "+
					"<br>Um dos aprendizados importantes em vidas passadas foi lidar corretamente com a autoexpressão e criatividade. "+
					"<br>Como houve negligência desse aprendizado, na vida atual ele reaparece para ser aprendido, sob pena de sofrer com as consequências negativas por ele trazidas.  "+
					"<br>É preciso eliminar essa falta negativa em sua personalidade para poder seguir em sua evolução espiritual com harmonia. "+
					 
					"<br>Quais foram suas faltas no passado: "+
					"<br>Mostra que houve falta de otimismo, imaginação e dificuldade em se expressar.  "+
					"<br>Deve ter sido pobre, com pouco ou sem estudos, com pouca ambição, sem imaginação e criatividade.  "+
					"<br>Não tinha vontade de progredir, acomodando-se aquela vida insignificante e sem perspectiva.  "+
					"<br>Não tinha confiança em si próprio e nem muito menos talento, o que o tornava um ser tímido, introspectivo, inseguro, agressivo, violento, nervoso e irritado.  "+
					 
					"<br>O que você trouxe desse aspecto negativo para a vida atual: "+
					"<br>Essas faltas do passado trazem na vida atual a introspecção e medo de comunicar-se, bloqueando sua criatividade e afetando seu senso de humor.  "+
					"<br>Também torna a pessoa sem vontade e sem determinação, ficando desencorajado de aparecer em público, preferindo não ser notado.  "+
					"<br>Essa falta de autoexpressão na vida atual causa ainda a facilidade em irritar-se, principalmente diante das críticas, fazendo com que tenha pouca imaginação e desperdice seus melhores talentos. "+
					 
					"<br>O que deve ser feito para eliminar essas falhas, corrigindo-as: "+
					"<br>Agora deve aprender a ser otimista, criativo e comunicativo, melhorando essa comunicação em qualquer tipo de expressão, seja falando, escrevendo ou representando, o que irá eliminar aos poucos a timidez.  "+
					"<br>Deve buscar aguçar sua imaginação, agir com segurança e pensar sempre positivamente. "+
					"<br>Precisa observar seu senso de humor, para manter-se sempre alegre, cultivando assim a paciência.";

					carmica[3] = "Lição Cármica 4 "+
					"<br>Um dos aprendizados importantes em vidas passadas foi lidar corretamente com o trabalho e disciplina. Como houve negligência desse aprendizado, na vida atual ele reaparece para ser aprendido, sob pena de sofrer com as consequências negativas por ele trazidas.  "+
					"<br>É preciso eliminar essa falta negativa em sua personalidade para poder seguir em sua evolução espiritual com harmonia. "+
					 
					"<br>Quais foram suas faltas no passado: "+
					"<br>Mostra que houve excesso de preguiça, iniciava várias coisas, mas não as concluía. "+
					"<br>Era desinteressado, desajeitado, imprudente, não gostava do que fazia, era desorganizado, dispersivo, impaciente, não cumpria tarefas corretamente, adiava tudo que podia, não gostava de receber ordens e não gostava de trabalho pesado ou metódico. "+
					 
					"<br>O que você trouxe desse aspecto negativo para a vida atual: "+
					"<br>Essas faltas do passado trazem na vida atual a desorganização, insatisfação e falta de praticidade e iniciativa, podendo ser forçado a encarar atividades indesejáveis. "+
					 
					"<br>O que deve ser feito para eliminar essas falhas, corrigindo-as: "+
					",br>Agora deve deixar de lado a preguiça, aprender a receber ordens, ser concentrado, objetivo e paciente. Precisa ter foco, dedicação, determinação, metas e objetivos claros.  "+
					"<br>Procure trabalhar de maneira prática, disciplinada e metódica, sendo constante, indo até o fim de cada projeto ou objetivo.  "+
					"<br>Deve aceitar trabalhos que não gosta, aprendendo a lhe dar com situações desinteressantes, que o fará atingir a autoconfiança e assim passará a gostar do que faz.";

					carmica[4] = "Lição Cármica 5 "+
					"<br>Um dos aprendizados importantes em vidas passadas foi lidar corretamente com a responsabilidade e a liberdade.  "+
					"<br>Como houve negligência desse aprendizado, na vida atual ele reaparece para ser aprendido, sob pena de sofrer com as consequências negativas por ele trazidas.  "+
					"<br>É preciso eliminar essa falta negativa em sua personalidade para poder seguir em sua evolução espiritual com harmonia. "+
					 
					"<br>Quais foram suas faltas no passado: "+
					"<br>Mostra que houve medo de aventuras, mudanças ou novidades.  "+
					"<br>Era uma pessoa medrosa, que não queria assumir responsabilidades, tinha medo de assumir riscos, era apegada aos velhos hábitos e costumes, agindo sempre com a máxima cautela, o que o tornava uma pessoa pacata, travada, introspectiva e sem iniciativa ou criatividade.  "+
					"<br>Era também descontrolado sexualmente. "+
					 
					"<br>O que você trouxe desse aspecto negativo para a vida atual: "+
					"<br>Essas faltas do passado trazem na vida atual a incompreensão dos que o rodeiam, mudanças indesejadas de emprego, parceira, casa, etc.  "+
					"<br>Sente-se rejeitado, mas é apenas uma rejeição imaginária, fazendo-o ter interesse falso em relação aos demais, para sentir-se aceito pelos outros. "+
					 
					"<br>O que deve ser feito para eliminar essas falhas, corrigindo-as: "+
					"<br>Agora deve aprender a ser versátil, flexível, sociável, criativo e inovador.  "+
					"<br>Deve aventurar-se em viagens, sair sem programações agendadas, ter hora de sair, mas sem hora de voltar. Precisa compreender o passado e não usá-lo como justificativa de seus atos.  "+
					"<br>Deve buscar atualizar-se às novidades, aceitar as mudanças, saber usar bem a sua liberdade, entender de política atual, comprar equipamentos tecnológicos modernos, andar na moda, frequentar lugares públicos, fazer amigos, ser sociável, dialogar e estar sempre aberto às mudanças.  "+
					"<br>Deve também controlar os impulsos, ser responsável e usufruir corretamente da sua energia sexual.";

					carmica[5] = "Lição Cármica 5 "+
					"<br>Um dos aprendizados importantes em vidas passadas foi lidar corretamente com a responsabilidade e a liberdade.  "+
					"<br>Como houve negligência desse aprendizado, na vida atual ele reaparece para ser aprendido, sob pena de sofrer com as consequências negativas por ele trazidas.  "+
					"<br>É preciso eliminar essa falta negativa em sua personalidade para poder seguir em sua evolução espiritual com harmonia. "+
					 
					"<br>Quais foram suas faltas no passado: "+
					"<br>Mostra que houve medo de aventuras, mudanças ou novidades.  "+
					"<br>Era uma pessoa medrosa, que não queria assumir responsabilidades, tinha medo de assumir riscos, era apegada aos velhos hábitos e costumes, agindo sempre com a máxima cautela, o que o tornava uma pessoa pacata, travada, introspectiva e sem iniciativa ou criatividade.  "+
					"<br>Era também descontrolado sexualmente. "+
					 
					"<br>O que você trouxe desse aspecto negativo para a vida atual: "+
					"<br>Essas faltas do passado trazem na vida atual a incompreensão dos que o rodeiam, mudanças indesejadas de emprego, parceira, casa, etc.  "+
					"<br>Sente-se rejeitado, mas é apenas uma rejeição imaginária, fazendo-o ter interesse falso em relação aos demais, para sentir-se aceito pelos outros. "+
					 
					"<br>O que deve ser feito para eliminar essas falhas, corrigindo-as: "+
					"<br>Agora deve aprender a ser versátil, flexível, sociável, criativo e inovador.  "+
					"<br>Deve aventurar-se em viagens, sair sem programações agendadas, ter hora de sair, mas sem hora de voltar. Precisa compreender o passado e não usá-lo como justificativa de seus atos.  "+
					"<br>Deve buscar atualizar-se às novidades, aceitar as mudanças, saber usar bem a sua liberdade, entender de política atual, comprar equipamentos tecnológicos modernos, andar na moda, frequentar lugares públicos, fazer amigos, ser sociável, dialogar e estar sempre aberto às mudanças.  "+
					"<br>Deve também controlar os impulsos, ser responsável e usufruir corretamente da sua energia sexual.";

					carmica[6] = "Lição Cármica 5 "+
					"<br>Um dos aprendizados importantes em vidas passadas foi lidar corretamente com a responsabilidade e a liberdade.  "+
					"<br>Como houve negligência desse aprendizado, na vida atual ele reaparece para ser aprendido, sob pena de sofrer com as consequências negativas por ele trazidas.  "+
					"<br>É preciso eliminar essa falta negativa em sua personalidade para poder seguir em sua evolução espiritual com harmonia. "+
					 
					"<br>Quais foram suas faltas no passado: "+
					"<br>Mostra que houve medo de aventuras, mudanças ou novidades.  "+
					"<br>Era uma pessoa medrosa, que não queria assumir responsabilidades, tinha medo de assumir riscos, era apegada aos velhos hábitos e costumes, agindo sempre com a máxima cautela, o que o tornava uma pessoa pacata, travada, introspectiva e sem iniciativa ou criatividade.  "+
					"<br>Era também descontrolado sexualmente. "+
					 
					"<br>O que você trouxe desse aspecto negativo para a vida atual: "+
					"<br>Essas faltas do passado trazem na vida atual a incompreensão dos que o rodeiam, mudanças indesejadas de emprego, parceira, casa, etc.  "+
					"<br>Sente-se rejeitado, mas é apenas uma rejeição imaginária, fazendo-o ter interesse falso em relação aos demais, para sentir-se aceito pelos outros. "+
					 
					"<br>O que deve ser feito para eliminar essas falhas, corrigindo-as: "+
					"<br>Agora deve aprender a ser versátil, flexível, sociável, criativo e inovador.  "+
					"<br>Deve aventurar-se em viagens, sair sem programações agendadas, ter hora de sair, mas sem hora de voltar. Precisa compreender o passado e não usá-lo como justificativa de seus atos.  "+
					"<br>Deve buscar atualizar-se às novidades, aceitar as mudanças, saber usar bem a sua liberdade, entender de política atual, comprar equipamentos tecnológicos modernos, andar na moda, frequentar lugares públicos, fazer amigos, ser sociável, dialogar e estar sempre aberto às mudanças.  "+
					"<br>Deve também controlar os impulsos, ser responsável e usufruir corretamente da sua energia sexual.";

					carmica[7] = "Lição Cármica 8 "+
					"<br>Um dos aprendizados importantes em vidas passadas foi lidar corretamente com as finanças e a justiça.  "+
					"<br>Como houve negligência desse aprendizado, na vida atual ele reaparece para ser aprendido, sob pena de sofrer com as consequências negativas por ele trazidas.  "+
					"<br>É preciso eliminar essa falta negativa em sua personalidade para poder seguir em sua evolução espiritual com harmonia. "+
					 
					"<br>Quais foram suas faltas no passado: "+
					"<br>Mostra que houve incapacidade de lidar com dinheiro e administrar suas contas.  "+
					"<br>Era irresponsável financeiramente, possuía muito dinheiro, provavelmente de herança, mas não o valorizava, pouco se importando com quem trabalhava para ganhá-lo, pois seu objetivo era apenas gastar.  "+
					"<br>Por ter grande poder graças ao dinheiro que possuía, não sabia usar dessa condição, sendo injusto com pessoas desfavorecidas. "+
					 
					"<br>O que você trouxe desse aspecto negativo para a vida atual: "+
					"<br>Essas faltas do passado trazem na vida atual sérios problemas financeiros, com muitos altos e baixos, desestabilizando-o emocionalmente.  "+
					"<br>Terá negócios fracassados e longos períodos de paralisação ou insatisfação financeira.  "+
					"<br>Poderá ter fraca percepção da realidade, ter sede de poder, ganância, falta de discernimento, desvalorização do dinheiro ou mau uso do mesmo, e ainda pode ter preocupações excessivas em possuí-lo. "+
					 
					"<br>O que deve ser feito para eliminar essas falhas, corrigindo-as: "+
					"<br>Agora deve aprender a ser cauteloso com o dinheiro, aprendendo a utilizá-lo com sabedoria, pois tem grande capacidade de atrair dinheiro.  "+
					"<br>Precisa aprender a ter talento para os negócios, que pode ser adquirido através de estudo do assunto.  Deve aprender a dar valor ao dinheiro, principalmente aprender a poupá-lo, pois em sua velhice terá de lidar com negócios próprios ou de outras pessoas e esse bom uso do dinheiro agora lhe trará uma velhice financeiramente saudável, já que nessa faze da vida irá precisar muito de dinheiro.  Precisa aprender a lidar com o poder, pois como atrai dinheiro, será fácil consegui-lo. "+
					"<br>Também precisa aprender a ser justo e honesto, não passando por cima e não atropelando os que possuem menos bens que você. ";

					carmica[8] = "Lição Cármica 9 "+
					"<br>Um dos aprendizados importantes em vidas passadas foi lidar corretamente com o amor e compaixão.  "+
					"<br>Como houve negligência desse aprendizado, na vida atual ele reaparece para ser aprendido, sob pena de sofrer com as consequências negativas por ele trazidas.  "+
					"<br>É preciso eliminar essa falta negativa em sua personalidade para poder seguir em sua evolução espiritual com harmonia. "+
					 
					"<br>Quais foram suas faltas no passado:  "+
					"<br>Mostra que houve falta de compaixão, compreensão e interesse pelos outros.  "+
					"<br>Não praticava o perdão, solidariedade e caridade.  "+
					"<br>Não entendia o que era ter amor ao próximo.  "+
					"<br>Era um ser frio, desumano, intolerante, indiferente, sem nenhum tipo de sentimento pelo próximo. "+
					"<br>Vivia exclusivamente para si e não se apegava a ninguém.  "+
					 
					"<br>O que você trouxe desse aspecto negativo para a vida atual: "+
					"<br>Essas faltas do passado trazem na vida atual muitos desapontamentos com cônjuges, familiares e amigos. Pode sofrer diversos tipos de doenças, passar longos períodos desempregado ou ter perda de bens.  "+
					 
					"<br>O que deve ser feito para eliminar essas falhas, corrigindo-as: "+
					"br>Agora deve aprender a ser amoroso, bondoso, generoso, tolerante, compreensivo, ter compaixão pelo sofrimento alheio, praticar a caridade e o perdão, participando da vida familiar e da vida social.  "+
					"<br>Deve fazer amigos, ajudar pessoas, mesmo as desconhecidas, se importando com o bem de todos.  "+
					"<br>Por afetar diretamente o orgulhoso ego, que não admite que você seja humilde perante as críticas, agressões ou ofensas alheias, fazendo com que revide na mesma moeda, essa se torna então a lição mais difícil de ser aprendida.";*/


	                

	                // Tendências Ocultas
	        var to0 = document.getElementById("txt1").value;
	        var to1 = to0.toLowerCase();
	        var to2 = to1.split(' ');
	        var to6 = [];

	        for(x=0; x < to2.length; x++) {

	            var to3 = to2[x];
	            var to4 = to3.split('');

	                for(y=0; y < to3.length; y++) {

	                    
	                    var to5 = to4[y];
	                    to6.push(letras[to5]);              

	                    

	                }

	        }

	        if(to6.indexOf(1) > 3){
	        	to6 = "DEU";
	        }

	        // Resposta Subconsciente

	        var rb = 9 - carmica.length;

	        if(rb == 2) {
	        	var erb = "Resposta Subconsciente 2 "+
				"<br>É uma pessoa egocêntrica e arrogante. Numa crise pensa apenas em si mesmo.";
	        } else if(rb == 3) {
	        	var erb = "Resposta Subconsciente 3 "+
				"<br>É uma pessoa dispersa e indisciplinada. Sua primeira reação é normalmente explosiva, reagindo de maneira destrutiva em certos casos.";
	        } else if(rb == 4) {
	        	var erb = "Resposta Subconsciente 4 "+
				"<br>É uma pessoa que normalmente vive perdida num labirinto de detalhes. Suas reações são fracas, com tendência à vacilação e por vezes até atrapalha ao invés de ajudar.";
	        } else if(rb == 5) {
	        	var erb = "Resposta Subconsciente 5 "+
				"<br>É uma pessoa tensa e nervosa.  Numa crise tem tendência a agir de forma confusa e impulsiva.";
	        } else if(rb == 6) {
	        	var erb = "Resposta Subconsciente 6"+
	        	"<br>É um ser sentimental.  Sua primeira preocupação numa crise é com os entes queridos, seus objetos de estimação e animais (se os tiver).  ";
	        } else if(rb == 7) {
	        	var erb = "Resposta Subconsciente 7 "+
				"<br>Geralmente é arredio e não se envolve em problemas alheios. Quando é exposto a uma situação de emergência analisa detalhadamente toda a situação, refletindo consigo mesmo sobre os fatos ou recorrendo às orações.  Caso haja perdas materiais ou de vidas nessas situações, pode tentar buscar alívio nos vícios, como bebida ou drogas. ";
	        } else if(rb == 8) {
	        	var erb = "Resposta Subconsciente 8 "+
				"<br>Geralmente é eficiente e organizado.  Numa crise ou em qualquer ocasião de emergência estará sempre disposto a ajudar, pois é seguro e digno de confiança. ";
	        } else if(rb == 9) {
	        	var erb = "Resposta Subconsciente 9 "+
				"<br>É uma pessoa geralmente entediada.  A maioria das coisas tem pouca importância para si. Numa crise não está disposto a ajudar, pois é impessoal, filósofo, introspectivo, resignado e indeciso.  ";
	        } else {
	        	rb = "Não possui.";
	        	var erb = "Não Possui";
	        }

	        //Grau de Ascenção

	        if(m7 > i7) {
	        	var ga = "<b>Espírito rebaixado</b> – Trata-se de um espírito que obteve um alto grau de evolução espiritual anteriormente, porém, ao cair nas armadilhas do egoísmo e materialismo transgrediu às leis naturais universais e acabou sendo rebaixado. Quando espíritos assim encarnam, tendem a sofrer com atrasos e dificuldades em suas conquistas, todavia, se não forem egoístas e materialistas, as chances de conquistar seus objetivos será maior. "
	        } else if ( m7 < i7) {
	        	var ga = "<b>Espírito em ascensão</b> – Trata-se de em espírito que está no caminho da elevação espiritual. Nesse caso, essas pessoas sentem que precisam ajudar o próximo, porém, dependendo do seu nível evolutivo podem ou não exercer essa condição, o que poderá leva-la ou não à elevação espiritual. Quando espíritos nessa categoria se tornam egoístas, materialistas e mercenários, poderão transgredir às leis naturais universais em prol de sua ganância e satisfação pessoal, o que acarretará em seu rebaixamento espiritual. "
	        } else {
	        	var ga = "<b>Espírito elevado</b> – Trata-se de um espírito que veio nessa encarnação com a missão de ajudar a humanidade em sua evolução espiritual, sendo muito comum que pessoas assim trabalhem com o meio religioso, esotérico, místico ou em ações e obras humanitárias e assistencialistas. Geralmente são pessoas que possuem um alto grau de compaixão e altruísmo, sentindo-se felizes quando conseguem ajudar o próximo de alguma forma.";
	        }

	        // Dívidas Cármicas

	        var dc7
	        var edc

	        if(d2[2] == 13) {
	        	dc7 = 13;
	        	edc = "Dívida Cármica 13 Está diretamente ligada à morte, seja por assassinato, suicídio e omissão de socorro. "+
 
				"<br>Quais foram suas infrações ou crimes no passado: Mostra que em vida passada houve negligência com a vida, sua ou de outras pessoas.  Mostrando que você cometeu um assassinato ou não prestou ajuda e socorro a alguém que veio a óbito por sua negligência.  Pode representar também o suicídio, por autoagressão ou através dos vícios que o levaram à morte. Independente do fato ou dos fatos ocorridos, todos foram cometidos intencionalmente, com plena escolha e consciência dos mesmos.  Mostra ainda que houve indiferença de sua parte com os outros e consigo mesmo, pois não se importou em destruir a sua vida ou a vida dos outros. "+
				 
				"<br>O que você trouxe desse aspecto negativo para a vida atual: Pode nessa existência ter muito medo da morte, e esse medo pode estender-se até mudanças ou transformações, que inconscientemente o levem a associá-las com a morte.  Pode ainda sofrer de preguiça excessiva, inércia, indiferença, descontentamento constante, pessimismo, negatividade e ineficiência.  Causa também a falta de compaixão, o que o leva a não se preocupar com o que ocorre à sua volta.  Ainda o leva a ser crítico, seja a nível pessoal, político ou existencial.  Pode ter dificuldades em aceitar rotinas, medo de trabalhar, ter más atitudes, sentir maus pressentimentos e tender para o uso de drogas.  Também poderá ter perdas materiais nessa existência em decorrência desses crimes do passado.  "+
				 
				"<br>O que deve ser feito para eliminar essas infrações ou crimes, quitando-os: Deve trabalhar duro em qualquer atividade, dar o máximo de si, e ser o melhor naquilo que se propor a fazer, sendo detalhista e perfeccionista. Deve aprender a lidar com as adversidades, que serão muitas ao longo dessa existência. Precisará administrar bens, tanto seus como dos outros e terá de fazer isso com maestria e honestidade. Deve agir sempre corretamente, evitando qualquer tipo de atitude errada, desde estacionar em uma vaga preferencial indo até crimes graves. Precisa aprender a satisfazer-se com o que possui e evitar ficar insatisfeito ou reclamando. Deve desenvolver talentos e habilidades pessoais, a fim de ocupar-se, ficando sempre em movimento. Precisa encarar a morte como um passo evolutivo da nossa jornada espiritual, pois somos seres eternos.  O que “morre” é a matéria, o espírito parte rumo à sua jornada eterna, por isso, não tenha medo da morte. ";
	        } else if(d2[2] == 14) {
	        	dc7 = 14;
	        	edc = "Dívida Cármica 14 Está ligada aos bens materiais e financeiros. "+
 
				"<br>Quais foram suas infrações ou crimes no passado: Mostra que em vida passada você não mediu esforços para subir na vida, e essa ganância por dinheiro e bens materiais o levou a agir fraudulentamente e ilicitamente, o que prejudicou a muitos, inclusive familiares, amigos, sócios e até cônjuge, levando-os a ter prejuízos, grandes perdas materiais e fracassos financeiros, até deixá-los na completa miséria, destruindo-os financeiramente e moralmente.  Foi ganancioso, egocêntrico e inescrupuloso, agindo sempre de má fé para benefício próprio, não se importando com os estragos causados na vida dos outros e nem com a má reputação na qual os deixaria. Mostra que houve um comportamento desregrado, esbanjador, inconsequente e egocêntrico; com falhas no caráter e na personalidade. Tinha forte tendência a vícios e geralmente não agia com responsabilidade.  "+
				 
				"<br>O que você trouxe desse aspecto negativo para a vida atual: Por causa de ambição egoísta inconsequente e desenfreada do passado, agora pode sofrer com adiamentos de planos, ter perturbações emocionais, sofrer perdas constantes e ter desapontamentos inesperados.  Pode passar privações financeiras, fazendo com que ganhe dinheiro hoje e logo em seguida venha a perder tudo sem explicação, ficando sempre desestabilizado financeiramente. Essa dívida também gera como consequência a insatisfação profissional na vida atual, dificuldades em realizar-se sexualmente, podendo a vir sofrer de abusos sexuais. Pode vir a ficar indeciso, perdido, incompreendido, principalmente no lado afetivo.  Pode sofrer com decepções geradas pela família, amigos, sócios e cônjuge. Terá perturbações e tribulações constantes, podendo trocar constantemente de emprego e de residência, ter perda de bens materiais e muitos fracassos nos negócios, ter sempre que passar por grandes obstáculos que o impedem de atingir seus objetivos, levando-o a sempre estar passando por algum problema financeiro ou material. A falta de compreensão e amor ao próximo no passado o levou a cometer tais erros, porém, nessa vida atual você ainda pode vir a cometer estes mesmos erros e deve estar alerta quanto a isso. "+
				 
				"<br>O que deve ser feito para eliminar essas infrações ou crimes, quitando-os: Deve aprender a ter compreensão, compaixão, humildade e o mais importante, aprender a ter o desapego e perdoar os outros. Deve evitar apegar-se as coisas e as pessoas. Deve cultivar o amor e compreensão universal. Precisa cuidar de si mesmo, da saúde e bem-estar do próprio corpo. Deve aprender a conviver com possíveis mudanças, aceitando-as e tirando das más situações as lições que o farão evoluir internamente. Precisa ter fé em si mesmo e ter objetivos sólidos, sem nunca pensar em desistir deles ou desanimar-se com obstáculos que aparecem, pois com determinação você os conquistará. ";
	        } else if(d2[2] == 16) {
	        	dc7 = 16;
	        	edc = "Dívida Cármica 16 Está ligada ao orgulho, autoritarismo, traição e vaidade humana. "+
 
				"<br>Quais foram suas infrações ou crimes no passado: Mostra que em vida passada você foi extremamente autoritário, frio, egoísta e até violento.  Sua única preocupação era com seu bem-estar e conforto, e pouco se importava com os direitos e sentimentos alheios, subjugando-os.   O que você trouxe desse aspecto negativo para a vida atual: Por causa desse excesso de autoritarismo e egoísmo do passado, agora pode vir a sofrer com sofrimentos e calamidades, sendo vítima de acidentes, decepções com familiares, amigos, colegas de trabalho e cônjuge; ter negócios fracassados e viver em constante “altos e baixos” financeiros.    Esse carma pode trazer a dor de ser traído, tanto pela parceira, como por amigos, colegas de trabalho e familiares nos quais confia. Pode ter seu orgulho e vaidade feridos, perdendo posição social, tendo sua reputação denegrida, perdendo seu prestígio ou poder, podendo ainda ter seu patrimônio reduzido. Atrairá falsos amigos, que o levarão a ter decepções constantes, desenganos e sofrimento. Terá sonhos destruídos ou cheios de obstáculos para realizá-los, levando-o a desistir dos mesmos. Essa dívida também atrai a possibilidade de infelicidade conjugal, podendo sofrer com traições e injustiças, crimes passionais, uniões ilegítimas, levando-o a separações indesejadas, e dificultando sua busca por um relacionamento afetivo e duradouro. "+
				 
				"<br>O que deve ser feito para eliminar essas infrações ou crimes, quitando-os: Deve ser compreensivo, solidário, paciente, ter compaixão, ser justo, honesto e solidário com os que precisam, mesmo com os desconhecidos. Deve ter pouco apego material e sentimental, equilibrando esses sentimentos. Precisa aprender a aceitar certas mudanças que o afligem, tirando seus proveitos, mesmo que através do sofrimento. Deve buscar autoconhecimento e autoconfiança, buscando a sabedoria que precisa para seguir em frente com harmonia e equilíbrio. ";
	        } else if(d2[2] == 19) {
	        	dc7 = 19;
	        	edc = "Dívida Cármica 19 Está ligada a iniquidade e ao enriquecimento ilícito.  "+
 
				"<br>Quais foram suas infrações ou crimes no passado: Por ser este o número do equilíbrio, o que indica a presença da lei da Causa e Efeito, mostrando que da vida tiramos exatamente aquilo que colocamos, e o efeito volta igual ao que o causou. Mostra que em vida passada você transgrediu essa lei, e agora deve pagar ou repor aquilo que tirou dos outros inadequadamente. No passado, você se apropriou inadequadamente de bens, dinheiro ou status social alheio, utilizando-se de artifícios fraudulentos. Por causa dos seus atos maldosos, outras pessoas sofreram, perderam seus bens e até levaram culpas que seriam suas, chegando a irem presas, terem bens confiscados e terem suas reputações destruídas por capricho seu. Pode também ter se apropriado de direitos autorais alheios, obtendo notoriedade, premiações, fama e prestígio fraudulentamente, fingindo serem de sua autoria. "+
				 
				"<br>O que você trouxe desse aspecto negativo para a vida atual: Agora poderá sofrer com traições de pessoas próximas, como cônjuge e sócios.  Poderá ver seus segredos sigilosos expostos a todos, causando-lhe diversos transtornos e constrangimentos. Terá grande perda de energia e verá chances e momentos desperdiçados, terá perdas na justiça, sofrerá injustiças, terá fraqueza de caráter e será intolerante. Gostará de abusar do poder, caso o tenha; tentará dominar a tudo e a todos, podendo chegar ao fim da vida e perceber que tudo se perdeu. Terá de conviver com sucessivos altos e baixos, até que aprenda que daqui só seremos dignos de colher o que plantamos. "+
				 
				"<br>O que deve ser feito para eliminar essas infrações ou crimes, quitando-os: Deve levar uma vida honesta, justa, reta, elevada, altruísta, cheia de amor, compaixão, afeto, bondade, caridade, fraternidade e humanitária, preocupando-se sempre com o bem-estar de todos. Jamais deve roubar, enganar, fraudar, burlar ou cometer qualquer ato ilícito ou fraudulento, quer seja para o bem próprio ou de outra pessoa. Deve agir sempre de forma correta, não importando o quão difícil seja, pois é semeando o bem que se colherá o bem. Deve exercer a tolerância, paciência, ser compreensivo e ter compaixão, agindo com sabedoria em benefício próprio e da coletividade. Precisa aprender a equilibrar o poder com o amor ao próximo.  Deve construir o próprio caráter baseando-se em suas experiências e aprender a usar bem o tempo e sua energia, canalizando-as para o bem-estar de todos.  Não deve ser dominador, orgulhoso, egoísta e autoritário. ";
	        } else if(m7 == 22 || s7 == 22) {
	        	dc7 = 13;
	        	edc = "Dívida Cármica 13 Está diretamente ligada à morte, seja por assassinato, suicídio e omissão de socorro. "+
 
				"<br>Quais foram suas infrações ou crimes no passado: Mostra que em vida passada houve negligência com a vida, sua ou de outras pessoas.  Mostrando que você cometeu um assassinato ou não prestou ajuda e socorro a alguém que veio a óbito por sua negligência.  Pode representar também o suicídio, por autoagressão ou através dos vícios que o levaram à morte. Independente do fato ou dos fatos ocorridos, todos foram cometidos intencionalmente, com plena escolha e consciência dos mesmos.  Mostra ainda que houve indiferença de sua parte com os outros e consigo mesmo, pois não se importou em destruir a sua vida ou a vida dos outros. "+
				 
				"<br>O que você trouxe desse aspecto negativo para a vida atual: Pode nessa existência ter muito medo da morte, e esse medo pode estender-se até mudanças ou transformações, que inconscientemente o levem a associá-las com a morte.  Pode ainda sofrer de preguiça excessiva, inércia, indiferença, descontentamento constante, pessimismo, negatividade e ineficiência.  Causa também a falta de compaixão, o que o leva a não se preocupar com o que ocorre à sua volta.  Ainda o leva a ser crítico, seja a nível pessoal, político ou existencial.  Pode ter dificuldades em aceitar rotinas, medo de trabalhar, ter más atitudes, sentir maus pressentimentos e tender para o uso de drogas.  Também poderá ter perdas materiais nessa existência em decorrência desses crimes do passado.  "+
				 
				"<br>O que deve ser feito para eliminar essas infrações ou crimes, quitando-os: Deve trabalhar duro em qualquer atividade, dar o máximo de si, e ser o melhor naquilo que se propor a fazer, sendo detalhista e perfeccionista. Deve aprender a lidar com as adversidades, que serão muitas ao longo dessa existência. Precisará administrar bens, tanto seus como dos outros e terá de fazer isso com maestria e honestidade. Deve agir sempre corretamente, evitando qualquer tipo de atitude errada, desde estacionar em uma vaga preferencial indo até crimes graves. Precisa aprender a satisfazer-se com o que possui e evitar ficar insatisfeito ou reclamando. Deve desenvolver talentos e habilidades pessoais, a fim de ocupar-se, ficando sempre em movimento. Precisa encarar a morte como um passo evolutivo da nossa jornada espiritual, pois somos seres eternos.  O que “morre” é a matéria, o espírito parte rumo à sua jornada eterna, por isso, não tenha medo da morte. ";
	        } else if(m7 == 4 || s7 == 4 || d7 == 4) {
	        	dc7 = 13;
	        	edc = "Dívida Cármica 13 Está diretamente ligada à morte, seja por assassinato, suicídio e omissão de socorro. "+
 
				"<br>Quais foram suas infrações ou crimes no passado: Mostra que em vida passada houve negligência com a vida, sua ou de outras pessoas.  Mostrando que você cometeu um assassinato ou não prestou ajuda e socorro a alguém que veio a óbito por sua negligência.  Pode representar também o suicídio, por autoagressão ou através dos vícios que o levaram à morte. Independente do fato ou dos fatos ocorridos, todos foram cometidos intencionalmente, com plena escolha e consciência dos mesmos.  Mostra ainda que houve indiferença de sua parte com os outros e consigo mesmo, pois não se importou em destruir a sua vida ou a vida dos outros. "+
				 
				"<br>O que você trouxe desse aspecto negativo para a vida atual: Pode nessa existência ter muito medo da morte, e esse medo pode estender-se até mudanças ou transformações, que inconscientemente o levem a associá-las com a morte.  Pode ainda sofrer de preguiça excessiva, inércia, indiferença, descontentamento constante, pessimismo, negatividade e ineficiência.  Causa também a falta de compaixão, o que o leva a não se preocupar com o que ocorre à sua volta.  Ainda o leva a ser crítico, seja a nível pessoal, político ou existencial.  Pode ter dificuldades em aceitar rotinas, medo de trabalhar, ter más atitudes, sentir maus pressentimentos e tender para o uso de drogas.  Também poderá ter perdas materiais nessa existência em decorrência desses crimes do passado.  "+
				 
				"<br>O que deve ser feito para eliminar essas infrações ou crimes, quitando-os: Deve trabalhar duro em qualquer atividade, dar o máximo de si, e ser o melhor naquilo que se propor a fazer, sendo detalhista e perfeccionista. Deve aprender a lidar com as adversidades, que serão muitas ao longo dessa existência. Precisará administrar bens, tanto seus como dos outros e terá de fazer isso com maestria e honestidade. Deve agir sempre corretamente, evitando qualquer tipo de atitude errada, desde estacionar em uma vaga preferencial indo até crimes graves. Precisa aprender a satisfazer-se com o que possui e evitar ficar insatisfeito ou reclamando. Deve desenvolver talentos e habilidades pessoais, a fim de ocupar-se, ficando sempre em movimento. Precisa encarar a morte como um passo evolutivo da nossa jornada espiritual, pois somos seres eternos.  O que “morre” é a matéria, o espírito parte rumo à sua jornada eterna, por isso, não tenha medo da morte. ";
	        } else if(m7 == 5 || s7 == 5 || d7 == 5) {
	        	dc7 = 14;
	        	edc = "Dívida Cármica 14 Está ligada aos bens materiais e financeiros. "+
 
				"<br>Quais foram suas infrações ou crimes no passado: Mostra que em vida passada você não mediu esforços para subir na vida, e essa ganância por dinheiro e bens materiais o levou a agir fraudulentamente e ilicitamente, o que prejudicou a muitos, inclusive familiares, amigos, sócios e até cônjuge, levando-os a ter prejuízos, grandes perdas materiais e fracassos financeiros, até deixá-los na completa miséria, destruindo-os financeiramente e moralmente.  Foi ganancioso, egocêntrico e inescrupuloso, agindo sempre de má fé para benefício próprio, não se importando com os estragos causados na vida dos outros e nem com a má reputação na qual os deixaria. Mostra que houve um comportamento desregrado, esbanjador, inconsequente e egocêntrico; com falhas no caráter e na personalidade. Tinha forte tendência a vícios e geralmente não agia com responsabilidade.  "+
				 
				"<br>O que você trouxe desse aspecto negativo para a vida atual: Por causa de ambição egoísta inconsequente e desenfreada do passado, agora pode sofrer com adiamentos de planos, ter perturbações emocionais, sofrer perdas constantes e ter desapontamentos inesperados.  Pode passar privações financeiras, fazendo com que ganhe dinheiro hoje e logo em seguida venha a perder tudo sem explicação, ficando sempre desestabilizado financeiramente. Essa dívida também gera como consequência a insatisfação profissional na vida atual, dificuldades em realizar-se sexualmente, podendo a vir sofrer de abusos sexuais. Pode vir a ficar indeciso, perdido, incompreendido, principalmente no lado afetivo.  Pode sofrer com decepções geradas pela família, amigos, sócios e cônjuge. Terá perturbações e tribulações constantes, podendo trocar constantemente de emprego e de residência, ter perda de bens materiais e muitos fracassos nos negócios, ter sempre que passar por grandes obstáculos que o impedem de atingir seus objetivos, levando-o a sempre estar passando por algum problema financeiro ou material. A falta de compreensão e amor ao próximo no passado o levou a cometer tais erros, porém, nessa vida atual você ainda pode vir a cometer estes mesmos erros e deve estar alerta quanto a isso. "+
				 
				"<br>O que deve ser feito para eliminar essas infrações ou crimes, quitando-os: Deve aprender a ter compreensão, compaixão, humildade e o mais importante, aprender a ter o desapego e perdoar os outros. Deve evitar apegar-se as coisas e as pessoas. Deve cultivar o amor e compreensão universal. Precisa cuidar de si mesmo, da saúde e bem-estar do próprio corpo. Deve aprender a conviver com possíveis mudanças, aceitando-as e tirando das más situações as lições que o farão evoluir internamente. Precisa ter fé em si mesmo e ter objetivos sólidos, sem nunca pensar em desistir deles ou desanimar-se com obstáculos que aparecem, pois com determinação você os conquistará. ";
	        } else if(m7 == 7 || s7 == 7 || d7 == 7) {
	        	dc7 = 16;
	        	edc = "Dívida Cármica 16 Está ligada ao orgulho, autoritarismo, traição e vaidade humana. "+
 
				"<br>Quais foram suas infrações ou crimes no passado: Mostra que em vida passada você foi extremamente autoritário, frio, egoísta e até violento.  Sua única preocupação era com seu bem-estar e conforto, e pouco se importava com os direitos e sentimentos alheios, subjugando-os.   O que você trouxe desse aspecto negativo para a vida atual: Por causa desse excesso de autoritarismo e egoísmo do passado, agora pode vir a sofrer com sofrimentos e calamidades, sendo vítima de acidentes, decepções com familiares, amigos, colegas de trabalho e cônjuge; ter negócios fracassados e viver em constante “altos e baixos” financeiros.    Esse carma pode trazer a dor de ser traído, tanto pela parceira, como por amigos, colegas de trabalho e familiares nos quais confia. Pode ter seu orgulho e vaidade feridos, perdendo posição social, tendo sua reputação denegrida, perdendo seu prestígio ou poder, podendo ainda ter seu patrimônio reduzido. Atrairá falsos amigos, que o levarão a ter decepções constantes, desenganos e sofrimento. Terá sonhos destruídos ou cheios de obstáculos para realizá-los, levando-o a desistir dos mesmos. Essa dívida também atrai a possibilidade de infelicidade conjugal, podendo sofrer com traições e injustiças, crimes passionais, uniões ilegítimas, levando-o a separações indesejadas, e dificultando sua busca por um relacionamento afetivo e duradouro. "+
				 
				"<br>O que deve ser feito para eliminar essas infrações ou crimes, quitando-os: Deve ser compreensivo, solidário, paciente, ter compaixão, ser justo, honesto e solidário com os que precisam, mesmo com os desconhecidos. Deve ter pouco apego material e sentimental, equilibrando esses sentimentos. Precisa aprender a aceitar certas mudanças que o afligem, tirando seus proveitos, mesmo que através do sofrimento. Deve buscar autoconhecimento e autoconfiança, buscando a sabedoria que precisa para seguir em frente com harmonia e equilíbrio. ";
	        } else if(m7 == 1 || s7 == 1 || d7 == 1) {
	        	dc7 = 19;
	        	edc = "Dívida Cármica 19 Está ligada a iniquidade e ao enriquecimento ilícito.  "+
 
				"<br>Quais foram suas infrações ou crimes no passado: Por ser este o número do equilíbrio, o que indica a presença da lei da Causa e Efeito, mostrando que da vida tiramos exatamente aquilo que colocamos, e o efeito volta igual ao que o causou. Mostra que em vida passada você transgrediu essa lei, e agora deve pagar ou repor aquilo que tirou dos outros inadequadamente. No passado, você se apropriou inadequadamente de bens, dinheiro ou status social alheio, utilizando-se de artifícios fraudulentos. Por causa dos seus atos maldosos, outras pessoas sofreram, perderam seus bens e até levaram culpas que seriam suas, chegando a irem presas, terem bens confiscados e terem suas reputações destruídas por capricho seu. Pode também ter se apropriado de direitos autorais alheios, obtendo notoriedade, premiações, fama e prestígio fraudulentamente, fingindo serem de sua autoria. "+
				 
				"<br>O que você trouxe desse aspecto negativo para a vida atual: Agora poderá sofrer com traições de pessoas próximas, como cônjuge e sócios.  Poderá ver seus segredos sigilosos expostos a todos, causando-lhe diversos transtornos e constrangimentos. Terá grande perda de energia e verá chances e momentos desperdiçados, terá perdas na justiça, sofrerá injustiças, terá fraqueza de caráter e será intolerante. Gostará de abusar do poder, caso o tenha; tentará dominar a tudo e a todos, podendo chegar ao fim da vida e perceber que tudo se perdeu. Terá de conviver com sucessivos altos e baixos, até que aprenda que daqui só seremos dignos de colher o que plantamos. "+
				 
				"<br>O que deve ser feito para eliminar essas infrações ou crimes, quitando-os: Deve levar uma vida honesta, justa, reta, elevada, altruísta, cheia de amor, compaixão, afeto, bondade, caridade, fraternidade e humanitária, preocupando-se sempre com o bem-estar de todos. Jamais deve roubar, enganar, fraudar, burlar ou cometer qualquer ato ilícito ou fraudulento, quer seja para o bem próprio ou de outra pessoa. Deve agir sempre de forma correta, não importando o quão difícil seja, pois é semeando o bem que se colherá o bem. Deve exercer a tolerância, paciência, ser compreensivo e ter compaixão, agindo com sabedoria em benefício próprio e da coletividade. Precisa aprender a equilibrar o poder com o amor ao próximo.  Deve construir o próprio caráter baseando-se em suas experiências e aprender a usar bem o tempo e sua energia, canalizando-as para o bem-estar de todos.  Não deve ser dominador, orgulhoso, egoísta e autoritário. ";
	        } else {
	        	dc7 = "Não Possui";
	        	edc = "não Possui";
	        }

	        // Números Harmonicos

	        var nh7

	        if (d2[2] == 1 || d2[2] == 10 || d2[2] == 19 || d2[2] == 28) {
	        	nh7 = "2, 4, 9";
	        } else if (d2[2] == 2 || d2[2] == 11 || d2[2] == 20 || d2[2] == 29) {
	        	nh7 = "1, 2, 3, 4, 5, 6, 7, 8, 9";
	        } else if (d2[2] == 3 || d2[2] == 12 || d2[2] == 21 || d2[2] == 30) {
	        	nh7 = "2, 3, 6, 8, 9";
	        } else if (d2[2] == 4 || d2[2] == 13 || d2[2] == 22 || d2[2] == 31) {
	        	nh7 = "1, 2, 6, 7";
	        } else if (d2[2] == 5 || d2[2] == 14 || d2[2] == 23) {
	        	nh7 = "2, 5, 6, 7, 9";
	        } else if (d2[2] == 6 || d2[2] == 15 || d2[2] == 24) {
	        	nh7 = "2, 3, 4, 5, 6, 9";
	        } else if (d2[2] == 7 || d2[2] == 16 || d2[2] == 25) {
	        	nh7 = "2, 4, 5, 7";
	        } else if (d2[2] == 8 || d2[2] == 17 || d2[2] == 26) {
	        	nh7 = "2, 3, 9";
	        } else if (d2[2] == 9 || d2[2] == 18 || d2[2] == 27) {
	        	nh7 = "1, 2, 3, 5, 6, 8, 9";
	        }

	        // Números Neutros

	        var nn7

	        if (d2[2] == 1 || d2[2] == 10 || d2[2] == 19 || d2[2] == 28) {
	        	nn7 = "1, 5, 6, 8";
	        } else if (d2[2] == 2 || d2[2] == 11 || d2[2] == 20 || d2[2] == 29) {
	        	nn7 = "Não possui";
	        } else if (d2[2] == 3 || d2[2] == 12 || d2[2] == 21 || d2[2] == 30) {
	        	nn7 = "7, 4";
	        } else if (d2[2] == 4 || d2[2] == 13 || d2[2] == 22 || d2[2] == 31) {
	        	nn7 = "3, 5, 9";
	        } else if (d2[2] == 5 || d2[2] == 14 || d2[2] == 23) {
	        	nn7 = "1, 4";
	        } else if (d2[2] == 6 || d2[2] == 15 || d2[2] == 24) {
	        	nn7 = "1";
	        } else if (d2[2] == 7 || d2[2] == 16 || d2[2] == 25) {
	        	nn7 = "3, 9";
	        } else if (d2[2] == 8 || d2[2] == 17 || d2[2] == 26) {
	        	nn7 = "1, 6";
	        } else if (d2[2] == 9 || d2[2] == 18 || d2[2] == 27) {
	        	nn7 = "4, 7";
	        }

	        // Números Desfavoráveis

	        var nd7

	        if (d2[2] == 1 || d2[2] == 10 || d2[2] == 19 || d2[2] == 28) {
	        	nd7 = "3, 7";
	        } else if (d2[2] == 2 || d2[2] == 11 || d2[2] == 20 || d2[2] == 29) {
	        	nd7 = "Não possui";
	        } else if (d2[2] == 3 || d2[2] == 12 || d2[2] == 21 || d2[2] == 30) {
	        	nd7 = "1, 5";
	        } else if (d2[2] == 4 || d2[2] == 13 || d2[2] == 22 || d2[2] == 31) {
	        	nd7 = "4, 8";
	        } else if (d2[2] == 5 || d2[2] == 14 || d2[2] == 23) {
	        	nd7 = "3, 8";
	        } else if (d2[2] == 6 || d2[2] == 15 || d2[2] == 24) {
	        	nd7 = "7, 8";
	        } else if (d2[2] == 7 || d2[2] == 16 || d2[2] == 25) {
	        	nd7 = "1, 6, 8";
	        } else if (d2[2] == 8 || d2[2] == 17 || d2[2] == 26) {
	        	nd7 = "4, 5, 7, 8";
	        } else if (d2[2] == 18 || d2[2] == 27) {
	        	nd7 = "Não Possui";
	        } else {
	        	nd7 = "Desfavorável apenas quando está relacionado ao materialismo.";
	        }

	        // Ciclos de Vida

	        var mat = 37 - d7;

			var primeiro = new Date(d2[0],d2[1],d2[2]);
			primeiro.setDate(primeiro.getDate() + 0);
			primeiro.setMonth(primeiro.getMonth() + 0);
			primeiro.setFullYear(primeiro.getFullYear() + mat);

			var dataNascimento = d2[2] + '/' + d2[1] + '/' + d2[0];
			var primeiroCiclo = primeiro.getDate() + '/' + primeiro.getMonth() + '/' + primeiro.getFullYear();

			/*var segundo = new Date(d2[0],d2[1],primeiro.getFullYear());
			segundo.setDate(segundo.getDate() + 0);
			segundo.setMonth(segundo.getMonth() + 0);
			segundo.setFullYear(segundo.getFullYear() + 27);

			var segundoCiclo = segundo.getDate() + '/' + segundo.getMonth() + '/' + segundo.getFullYear();*/

			var segundoCiclo = primeiro.getDate() + '/' + primeiro.getMonth() + '/' + (primeiro.getFullYear()+27);

			var vpc7
			var vpc

			if(d2[1] == 1 || d2[1] == 10) {
				vpc7 = 1;
				vpc = "A vibração 1 no Primeiro Ciclo de Vida mostra uma criança individualista, que precisa aprender a desenvolver essa sua individualidade de forma positiva.  Caso não desenvolva corretamente sua individualidade ainda criança, na juventude e adolescência, ou já na maturidade, próximo à entrada do Segundo Ciclo de Vida, poderá sofrer com dificuldades emocionais e dificuldades em se estabilizar profissionalmente.  O ideal é que a criança com esse Ciclo de Vida seja educada dentro dos limites que lhe dão liberdade bem dosada, nem restrita demais e nem solta demais, afim de que possa se desenvolver harmoniosamente.  Quando a pessoa já é maior de 18 anos e ainda está no Primeiro Ciclo de Vida, caso tenha sido reprimida e não tenha recebido uma educação condizente, precisa absorver esses ensinamentos e os colocar em prática imediatamente.  Geralmente a pessoa que possui esse Ciclo de Vida é independente, ambiciosa e até autoritária, priorizando buscar e alcançar aquilo que deseja através de sua força de vontade e iniciativa. Na maioria das vezes, há uma forte presença de um homem na vida dessa pessoa, que a influencia de algum modo.";
			} else if (d2[1] == 2) {
				vpc7 = 2;
				vpc = "A vibração 2 no Primeiro Ciclo de Vida mostra uma criança muito mimada e sensível, que precisa aprender a desenvolver a sua autonomia, já que provavelmente recebeu o excesso de cuidados, seja por parte da mãe ou dos avós, tornando-a uma criança frágil e melindrosa. Ao chegar na adolescência é comum que pense em casar o mais cedo possível, e isso é mais comum entre os homens. Geralmente a pessoa que possui esse Ciclo de Vida é amiga, companheira, afetuosa, bondosa e cooperativa, estando sempre disposta a ajudar, porém, também pode ser submissa e insegura, necessitando se autoposicionar. Na maioria das vezes, há uma forte presença de uma mulher na vida dessa pessoa, que a influencia de algum modo.";
			} else if (d2[1] == 3 || d2[1] == 12) {
				vpc7 = 3;
				vpc = "A vibração 3 no Primeiro Ciclo de Vida mostra uma criança alegre, sociável e criativa, que precisa aprender a desenvolver sua sociabilidade e comunicação. É possível que ainda na escola a criança sob esse Ciclo mostre seus dons artísticos e os desenvolva, vindo a se autoexpressar sob qualquer forma de arte, seja cantando, pintando, atuando ou dançando. Devido ao seu alto poder criativo é possível que venha a se destacar nas artes em seu período escolar. Todavia, embora haja muita criatividade nesse período escolar, é comum que sua comunicação seja aguçada e seu desejo por socializar seja muito superior ao gosto pelos estudos, o que faz com que prefira ser o centro das atenções por suas qualidades artísticas e criativas, do que pelo seu bom desempenho escolar. Na adolescência é comum ter vários romances e participar de vários círculos sociais, porém, devido ao excesso de diversão é desaconselhável que se case durante este Ciclo de Vida, a menos que tenha disposição para abrir mão das diversões para assumir um relacionamento sério. No início da maturidade é comum que sinta falta dos estudos, vindo a se lamentar pelo tempo perdido, porém, precisará buscar recuperar o tempo perdido para obter êxito profissional. Geralmente a pessoa que possui esse Ciclo de Vida é sociável, alegre e divertida, possuindo uma vasta rede de amigos e muitos familiares à sua volta. Na maioria das vezes, há uma necessidade exagerada em buscar alegria e diversão, priorizando seu lado social. ";
			} else if (d2[1] == 4) {
				vpc7 = 4;
				vpc = "A vibração 4 no Primeiro Ciclo de Vida mostra uma criança retraída e obediente, que vive em uma família cheia de regras, disciplina e restrições, porém, precisa aprender a ter autoconfiança e autodomínio. Possivelmente sua família é de certa maneira severa, daquelas que impõe o comando sem aceitar contestações. Na escola é provável que tenha muitas atividades a fazer, o que pode sobrecarregar a criança ainda nos primeiros anos de estudo. O excesso de responsabilidades ou repressão podem afetar a criatividade e autoconfiança ainda na infância, o que produzirá uma adolescência ou maturidade de submissão, o que afetará os relacionamentos afetivos, pois, será sempre refém das ideias e opiniões do cônjuge. Geralmente a pessoa que possui esse Ciclo de Vida é organizada, séria e disciplinada, que geralmente não gosta de aventuras ou de correr riscos. No final da adolescência e início da maturidade precisará lutar bastante para alcançar seus objetivos, principalmente os materiais e/ou financeiros. Como há um desejo por segurança, é natural que trabalhe duro em busca de bases sólidas. ";
			} else if (d2[1] == 5) {
				vpc7 = 5;
				vpc = "A vibração 5 no Primeiro Ciclo de Vida mostra uma criança com a liberdade de certa forma exagerada, onde os pais ou familiares deixam a criança livre para fazer suas próprias escolhas, o que pode ser negativo em certo ponto, já que a criança não tem condições suficientes de analisar o que deve ou não fazer de forma correta e construtiva. Também aponta muitas mudanças, seja de casa, escola ou meio social, o que poderá ser difícil para criança ou adolescente se adaptar, principalmente na parte escolar, onde os estudos poderão ser interrompidos e/ou deixados de lado, seja por negligência ou necessidade. Devido ao excesso de liberdade, ao chegar na adolescência é comum que haja o envolvimento com drogas, álcool e sexo, podendo até tender para libertinagem. Pode ocorrer uma gravidez não-planejada nesse período, principalmente quando há falta de orientação sexual em casa. O casamento não é aconselhável nesse período, porém, se ocorrer, tende a durar muito pouco. Profissionalmente é natural não permanecer muito tempo no mesmo emprego, principalmente por não conseguir se adaptar aos mesmos, porém, essa estabilidade tende a ocorrer logo após a entrega do Segundo Ciclo de Vida. Esse é um Ciclo movimentado, cheio de mudanças e transformações, porém, é necessário ser adaptável e se moldar as situações inovadoras. Geralmente a pessoa que possui esse Ciclo de Vida é dinâmica, habilidosa e aprecia o lado físico. É necessário aprender a lidar com as mudanças, sendo adaptável e versátil.";
			} else if (d2[1] == 6) {
				vpc7 = 6;
				vpc = "A vibração 6 no Primeiro Ciclo de Vida mostra uma criança cheia de deveres, responsabilidades e restrições, principalmente dentro de casa, onde possivelmente cuidará de irmãos mais novos ou logo cedo será colocada para fazer serviços domésticos. Os pais ou responsáveis precisam ter cuidado para não sobrecarregar a criança com obrigações sérias demais, tirando sua pouca infância. É necessário aprender a lidar com os deveres e responsabilidades familiares, encarando-as ao invés de fugir deles. É comum que na adolescência aconteça uma aventura amorosa que poderá acabar em casamento, todavia, embora se fale em “amor”, é bom que se tenha em mente o que é amor e o que é o desejo de fuga das responsabilidades domésticas, pois, é muito comum que na adolescência se acredite que sair da casa dos pais é a melhor saída, porém, não será o casamento que trará o alívio dessas responsabilidades que se deseja fugir, pelo contrário, o casamento trará ainda mais responsabilidades, principalmente após a chegada dos filhos. Todavia, geralmente os casamentos adquiridos nesse período duram pouco e logo se desfazem, porém, independentemente de ter casado ou não, esse Ciclo mostra que a família será sua prioridade, seja a sua ou a que acabou de construir. Geralmente a pessoa que possui esse Ciclo de Vida é afetuosa e responsável.  Na maioria dos casos a pessoa sente a necessidade de vivenciar uma vida familiar feliz e cheia de amigos.";
			} else if (d2[1] == 7) {
				vpc7 = 7;
				vpc = "A vibração 7 no Primeiro Ciclo de Vida mostra uma criança retraída e incompreendida pela família, amigos, professores e etc., sendo necessário aprender a lidar com as opiniões alheias.  Essa condição pode se estender até a adolescência ou início da maturidade. Devido a incompreensão, a pessoa com este Ciclo tende ao isolamento, podendo sentir medo de encarar a vida com determinação e coragem. Se isso for persistente ao longo do tempo, por volta dos 20/21 anos é possível que tenha desenvolvido complexo de culpa e não possua autoconfiança, o que afetará seu desenvolvimento pessoal e profissional. Geralmente a pessoa que possui esse Ciclo de Vida é educada, analítica e introspectiva, contudo, o ideal é buscar o autoconhecimento e buscar apoio religioso ou espiritual. Também é importante buscar se expressar de alguma forma criativa ou artística. ";
			} else if (d2[1] == 8) {
				vpc7 = 8;
				vpc = "A vibração 8 no Primeiro Ciclo de Vida mostra uma criança ligada ao lado material e/ou intelectual, que precisa aprender a lidar com o poder e honestidade. Ainda na infância ou adolescência poderá sentir atração por bens de consumo excessivamente caros, o que lhe trará transtornos, caso sua família não tenha condições de oferecer o que deseja. Todavia, é muito comum que pessoas com este Ciclo de Vida tenham acesso mais facilitado ao dinheiro, seja trabalhando ou recebendo mesada, herança e etc. Devido ao desejo por bens materiais é comum que a pessoa com este Ciclo de Vida venha a trabalhar muito jovem, seja para conquistar seus próprios bens materiais ou para auxiliar nas despesas familiares, caso venha de uma família humilde. Em todos os casos, pessoas com este Ciclo de Vida são dispostas ao trabalho e logo cedo aprendem sobre o poder, a justiça e os aspectos materiais da vida. Também é nesse período que se forjam os homens de negócios, políticos, advogados e todos aqueles que pensam mais no lado material da vida, o que fortalecerá sua intelectualidade e busca pela autorrealização. Geralmente a pessoa que possui esse Ciclo de Vida é esperta e individualista, necessitando aprender a manter o equilíbrio entre o lado material e espiritual. ";
			} else if (d2[1] == 9) {
				vpc7 = 9;
				vpc = "A vibração 9 no Primeiro Ciclo de Vida mostra uma criança tensa e até nervosa, com dificuldades de concentração, que precisa aprender a desenvolver sua sociabilidade e compreensão.  Caso isso persista até a adolescência, a pessoa com este Ciclo de Vida irá se sentir assustada, confusa, nervosa e com maiores dificuldades de concentração, devido a tensão ainda maior nesse período. Embora haja possibilidade de ter bom ensino educacional, poderá não ter êxito devido à falta de concentração. Por ser um período de muita sensibilidade e espiritualidade, a criança e/ou adolescente sofrem com a incompreensão dos familiares, amigos e até professores. O casamento deve ser evitado nesse período, pois, tende a durar muito pouco e deixar grandes traumas após seu término. No final da adolescência e início da maturidade poderá enfrentar problemas ao se relacionar com outras pessoas, o que poderá afetar o início de sua carreira profissional, permanecendo um longo período sem trabalho. Todavia, é interessante que consiga se fixar no lado profissional ainda neste Ciclo de Vida, aproveitando para pôr em prática todas as suas potencialidades. Geralmente a pessoa com esse Ciclo de Vida é generosa e compreensiva, todavia, precisa desenvolver sua paciência, compaixão e altruísmo, para poder enfrentar com aceitação e adaptação as mudanças, transformações, inovações e oscilações desse período. Esse é, sem dúvidas, o mais difícil dentre todos os Primeiros Ciclos de Vida. ";
			} else if (d2[1] == 11) {
				vpc7 = 11;
				vpc = "A vibração 11 no Primeiro Ciclo de Vida mostra uma criança sensível, mimada e superprotegida pela mãe, avó, tia ou outra figura feminina, que tenta protege-la das calúnias ou discriminações das outras crianças ou pessoas. Será uma pessoa cheia de inspiração e energia espiritual muito intensa, porém, precisa aprender a lidar com o excesso de sensibilidade e autocomiseração. Geralmente a pessoa com esse Ciclo de Vida sente a necessidade de trabalhar e sentir-se útil. Por ser um Ciclo de Vida muito forte, será necessário lutar contra o vitimismo e autopiedade. ";
			}

			// Vibração Segundo Ciclo

			var vsc7
			var vsc

			if(d2[2] == 1 || d2[2] == 10 || d2[2] == 19 || d2[2] == 28) {
				vsc7 = 1;
				vsc = "A vibração 1 no Segundo Ciclo de Vida mostra um período de ambições, grande desejo de realizações e também de sucesso relativo.  Precisa desenvolver seus próprios recursos, estudando e se dedicando ao máximo possível, além de se esforçar para se tornar independente e chegar ao Terceiro Ciclo de Vida já com definição profissional, social e financeira.  Este Ciclo de Vida revela disposição para realizar, autonomia, energia e construção.  Deve buscar realizações e independência, mas não deve sacrificar os outros para realização de seus próprios desejos.  Energia, realizações e êxitos dos esforços fazem parte desse ciclo.";
			} else if (d2[2] == 2 || d2[2] == 20) {
				vsc7 = 2;
				vsc = "A vibração 2 no Segundo Ciclo de Vida mostra sociabilidade e receptividade.  É necessário cultivar a paciência, o tato, a diplomacia e a capacidade de perceber os sentimentos alheios.  Pode indicar uma carreira diplomática, juiz, médico, professor ou consultor.  A sua disposição está para associações, cooperação e trabalho em equipe.  Pode ocorrer certa submissão, o que pode não ser ruim, se isso significar que é uma pessoa cooperativa.  É um período para trocar, colaborar e ter solidariedade.  A família e o casamento serão favorecidos nesse ciclo. Deve evitar o egoísmo e egocentrismo. ";
			} else if (d2[2] == 3 || d2[2] == 12 || d2[2] == 21 || d2[2] == 30) {
				vsc7 = 3;
				vsc = "A vibração 3 no Segundo Ciclo de Vida mostra uma fase agradável da vida com certa despreocupação.  É a fase da sociabilidade, na qual a criatividade e a originalidade podem se exteriorizar pelas ideias e sentimentos através de algum tipo de arte: pintura, música, teatro, escrita, etc.  É um magnífico período para desenvolver a criatividade, porém, não deve investir demasiada energia em coisas fúteis.  A sua disposição está voltada para buscar felicidade, amigos, sucesso e realizações.  Deve criar, expressar, ter alegria de viver.  Esse é o mais agradável de todos os ciclos. ";
			} else if (d2[2] == 4 || d2[2] == 13 || d2[2] == 31) {
				vsc7 = 4;
				vsc = "A vibração 4 no Segundo Ciclo de Vida é sinônimo de trabalho duro, de produtividade e de construção do alicerce no qual se apoiará no futuro.  É um período em que surge a necessidade de aprender a aceitar a rotina e a trabalhar em algo produtivo, sólido e a fazer economia.  A sua disposição neste Ciclo de Vida é para construir, trabalhar, produzir, plantar.  Mostra poucas viagens, a não ser de trabalho, e férias destinadas a se refazer para continuar.  Deve construir estrutura e segurança. ";
			} else if (d2[2] == 5 || d2[2] == 14 || d2[2] == 23) {
				vsc7 = 5;
				vsc = "A vibração 5 no Segundo Ciclo de Vida é indicativo de um período de expansão de horizontes, época propícia para viagens, mudanças, romances, liberdade, novas atividades e também novos amigos.  Quase sempre, neste período, a pessoa encontrará as suas melhores oportunidades longe de casa.  Precisa aprender a se adaptar, a procurar novas maneiras de ver as coisas e a evitar a tendência para fixar-se por muito tempo num determinado lugar.  Em resumo, é um período de grande movimentação, de grandes mudanças e de novos horizontes.  Grande disposição para inovações, mudanças, atividades variadas e dinamismo. Reviravoltas inesperadas poderão acontecer, por isso deve aprender a lidar e trabalhar com as mudanças e o dinamismo.";
			} else if (d2[2] == 6 || d2[2] == 15 || d2[2] == 24) {
				vsc7 = 6;
				vsc = "A vibração 6 no Segundo Ciclo de Vida mostra um período de ajustes e de responsabilidades nos assuntos domésticos em geral.  É um bom momento para o casamento ou firmar-se num relacionamento, ter filhos e solidificar a família.  Em suma, é um período familiar, de colocar a casa em ordem, de viver mais para a família e deixar de ser tanto individualista.  A sua disposição é para enfrentar grandes responsabilidades, viver em família, conciliar e ajudar os outros.  Adaptação tanto no plano familiar quanto profissional, confrontação com problemas diversos, às vezes relativos a outros.  Mostra vida familiar feliz.  Deve servir a família e grupos e não perseguir a perfeição. ";
			} else if (d2[2] == 7 || d2[2] == 16 || d2[2] == 25) {
				vsc7 = 7;
				vsc = "A vibração 7 no Segundo Ciclo de Vida indica um período de crescimento tranquilo, de estudos e reflexões.  A sua disposição está voltada para estudar, pesquisar, refletir, se autoconhecer e crescer.  Deve buscar no autoconhecimento a sua essência e a sua espiritualidade, sua própria verdade e sua legitimidade. O casamento é pouco provável nesse ciclo e se vier a acontecer, deve ser fruto de criteriosa escolha. Isto, é claro, não significa que não deva se casar, apenas que deve prestar muita atenção nos seus sentimentos, pois poderá haver alguma dificuldade no relacionamento devido a uma tendência a se interiorizar demais.  Não há necessidade de procurar as oportunidades, elas se apresentarão. Mas não basta só esperar, é preciso ter atenção a elas e saber agarrá-las.  É um período em que a fé pode desabrochar.";
			} else if (d2[2] == 8 || d2[2] == 17 || d2[2] == 26) {
				vsc7 = 8;
				vsc = "A vibração 8 no Segundo Ciclo de Vida mostra um período de preocupação com os aspectos materiais e financeiros da vida.  Este período promete assuntos importantes no mundo dos negócios e das finanças.  Terá êxito material, se agir construtivamente, com boas possibilidades de realizações no mundo dos negócios e de ganhar muito dinheiro com o trabalho e também através de especulações.  Terá de se esforçar para atenuar as tensões existentes.  Deve resgatar o seu próprio poder pessoal. ";
			} else if (d2[2] == 9 || d2[2] == 18 || d2[2] == 27) {
				vsc7 = 9;
				vsc = "A vibração 9 no Segundo Ciclo de Vida traz a possibilidade de sucesso na vida pública.  É um período altamente espiritual e é preciso aprender a cultivar a tolerância, o amor à humanidade, o altruísmo e o controle emocional.  Probabilidade de haver dificuldades no casamento devido à tendência a dedicar-se e a dar mais amor à humanidade que à própria família.  É, também, indício de alguma perda, seja ela material, afetiva ou social.  Disposição voltada para a busca de sabedoria espiritual, para aprender o desapego, o desprendimento e a doar-se.  Tendências espirituais que levam ao sucesso na vida pública, com poucos fracassos se os esforços necessários forem feitos.  Deve trabalhar o perdão e o desapego.";
			} else if (d2[2] == 11 || d2[2] == 29) {
				vsc7 = 11;
				vsc = "A vibração 11 no Segundo Ciclo de Vida mostra um período de revelações, de ideais e grandeza, e, possivelmente de fama.  É o momento de desenvolver a mente, de se especializar em alguma coisa, de estudar, ensinar e também de inspirar as outras pessoas através do seu próprio exemplo.  Disposição voltada para as questões espirituais, sensoriais e intuitivas.  Deve desenvolver a intuição e aproveitá-la bem neste Ciclo de Vida.";
			} else if (d2[2] == 22) {
				vsc7 = 22;
				vsc = "A vibração 22 no Segundo Ciclo de Vida é indício de grandes realizações e de liderança em alto nível.  O objetivo primordial neste Ciclo de Vida deve ser o de beneficiar a humanidade como um todo.  Em virtude do grande poder deste número, os nervos e as emoções serão testados durante todo o período e a pessoa deve manter-se o mais calma possível e seguir a orientação da sua intuição.  Disposição fortemente inclinada para grandes realizações, autoridade e comando.  Deve direcionar toda a sua energia para realizações que beneficiem a humanidade. ";
			}

			// Vibração Terceiro Ciclo

					var vtc = d2[0].split('');
	                var vtc7 = 0;

		                for(y=0; y < vtc.length; y++) {

		                    
		                    var vtc5 = vtc[y];
		                    var vtc7 = vtc7+vtc5;
		                    var vtc8 = vtc7.toString();

		                                      

		                    

		                }

		                if(vtc8.length > 1 && vtc7 != 22 && vtc7 != 11) {

		                            var vtc9 = vtc8.split('');
		                            var vtc10 = parseInt(vtc9[0]);
		                            var vtc11 = parseInt(vtc9[1]);
		                            var vtc7 = parseInt(vtc10)+parseInt(vtc11);

		                        }  

		                alert(vtc7);
	        


	        


	                document.getElementById("result").innerHTML = 
	                "<h1>Resultado</h1>"+
	                "<br>Motivação: "+m7+" - "+
	                " "+"<button type='button' class='btn btn-outline-primary btn-sm' data-toggle='modal' data-target='#myModal'>"+
					    "Ler +"+
					  "</button>"+
					  "<div class='modal fade' id='myModal'>"+
						    "<div class='modal-dialog modal-xl'>"+
						     " <div class='modal-content'>"+
						      
						      "  <!-- Modal Header -->"+
						       " <div class='modal-header'>"+
						        "  <h4 class='modal-title'>Motivação</h4>"+
						         " <button type='button' class='close' data-dismiss='modal'>&times;</button>"+
						        "</div>"+
						        
						        "<!-- Modal body -->"+
						        "<div class='modal-body'>"+
						          em+
						        "</div>"+
						        
						        "<!-- Modal footer -->"+
						        "<div class='modal-footer'>"+
						         " <button type='button' class='btn btn-danger' data-dismiss='modal'>Fechar</button>"+
						        "</div>"+
						        
						      "</div>"+
						    "</div>"+
						  "</div>"+
	                "<br><br>Impressão: "+i7+" - "+
	                " "+"<button type='button' class='btn btn-outline-primary btn-sm' data-toggle='modal' data-target='#myModal1'>"+
					    "Ler +"+
					  "</button>"+
					  "<div class='modal fade' id='myModal1'>"+
						    "<div class='modal-dialog modal-xl'>"+
						     " <div class='modal-content'>"+
						      
						      "  <!-- Modal Header -->"+
						       " <div class='modal-header'>"+
						        "  <h4 class='modal-title'>Impressão</h4>"+
						         " <button type='button' class='close' data-dismiss='modal'>&times;</button>"+
						        "</div>"+
						        
						        "<!-- Modal body -->"+
						        "<div class='modal-body'>"+
						          ei+
						        "</div>"+
						        
						        "<!-- Modal footer -->"+
						        "<div class='modal-footer'>"+
						         " <button type='button' class='btn btn-danger' data-dismiss='modal'>Fechar</button>"+
						        "</div>"+
						        
						      "</div>"+
						    "</div>"+
						  "</div>"+
	                "<br><br>Expressão: "+s7+" - "+
	                " "+"<button type='button' class='btn btn-outline-primary btn-sm' data-toggle='modal' data-target='#myModal2'>"+
					    "Ler +"+
					  "</button>"+
					  "<div class='modal fade' id='myModal2'>"+
						    "<div class='modal-dialog modal-xl'>"+
						     " <div class='modal-content'>"+
						      
						      "  <!-- Modal Header -->"+
						       " <div class='modal-header'>"+
						        "  <h4 class='modal-title'>Expressão</h4>"+
						         " <button type='button' class='close' data-dismiss='modal'>&times;</button>"+
						        "</div>"+
						        
						        "<!-- Modal body -->"+
						        "<div class='modal-body'>"+
						          es+
						        "</div>"+
						        
						        "<!-- Modal footer -->"+
						        "<div class='modal-footer'>"+
						         " <button type='button' class='btn btn-danger' data-dismiss='modal'>Fechar</button>"+
						        "</div>"+
						        
						      "</div>"+
						    "</div>"+
						  "</div>"+
	                "<br><br>Destino: "+d7+" - "+
	                " "+"<button type='button' class='btn btn-outline-primary btn-sm' data-toggle='modal' data-target='#myModal3'>"+
					    "Ler +"+
					  "</button>"+
					  "<div class='modal fade' id='myModal3'>"+
						    "<div class='modal-dialog modal-xl'>"+
						     " <div class='modal-content'>"+
						      
						      "  <!-- Modal Header -->"+
						       " <div class='modal-header'>"+
						        "  <h4 class='modal-title'>Destino</h4>"+
						         " <button type='button' class='close' data-dismiss='modal'>&times;</button>"+
						        "</div>"+
						        
						        "<!-- Modal body -->"+
						        "<div class='modal-body'>"+
						          ed+
						        "</div>"+
						        
						        "<!-- Modal footer -->"+
						        "<div class='modal-footer'>"+
						         " <button type='button' class='btn btn-danger' data-dismiss='modal'>Fechar</button>"+
						        "</div>"+
						        
						      "</div>"+
						    "</div>"+
						  "</div>"+
	                "<br><br>Missão: "+mi7+" - "+
	                " "+"<button type='button' class='btn btn-outline-primary btn-sm' data-toggle='modal' data-target='#myModal4'>"+
					    "Ler +"+
					  "</button>"+
					  "<div class='modal fade' id='myModal4'>"+
						    "<div class='modal-dialog modal-xl'>"+
						     " <div class='modal-content'>"+
						      
						      "  <!-- Modal Header -->"+
						       " <div class='modal-header'>"+
						        "  <h4 class='modal-title'>Missão</h4>"+
						         " <button type='button' class='close' data-dismiss='modal'>&times;</button>"+
						        "</div>"+
						        
						        "<!-- Modal body -->"+
						        "<div class='modal-body'>"+
						          emi+
						        "</div>"+
						        
						        "<!-- Modal footer -->"+
						        "<div class='modal-footer'>"+
						         " <button type='button' class='btn btn-danger' data-dismiss='modal'>Fechar</button>"+
						        "</div>"+
						        
						      "</div>"+
						    "</div>"+
						  "</div>"+
	                "<br><br>Dia do Nascimento: "+d2[2]+" - "+
	                " "+"<button type='button' class='btn btn-outline-primary btn-sm' data-toggle='modal' data-target='#myModal5'>"+
					    "Ler +"+
					  "</button>"+
					  "<div class='modal fade' id='myModal5'>"+
						    "<div class='modal-dialog modal-xl'>"+
						     " <div class='modal-content'>"+
						      
						      "  <!-- Modal Header -->"+
						       " <div class='modal-header'>"+
						        "  <h4 class='modal-title'>Dia do Nascimento</h4>"+
						         " <button type='button' class='close' data-dismiss='modal'>&times;</button>"+
						        "</div>"+
						        
						        "<!-- Modal body -->"+
						        "<div class='modal-body'>"+
						          edn+
						        "</div>"+
						        
						        "<!-- Modal footer -->"+
						        "<div class='modal-footer'>"+
						         " <button type='button' class='btn btn-danger' data-dismiss='modal'>Fechar</button>"+
						        "</div>"+
						        
						      "</div>"+
						    "</div>"+
						  "</div>"+
	                "<br><br>Número Psíquico: "+p7+" - "+
	                " "+"<button type='button' class='btn btn-outline-primary btn-sm' data-toggle='modal' data-target='#myModal6'>"+
					    "Ler +"+
					  "</button>"+
					  "<div class='modal fade' id='myModal6'>"+
						    "<div class='modal-dialog modal-xl'>"+
						     " <div class='modal-content'>"+
						      
						      "  <!-- Modal Header -->"+
						       " <div class='modal-header'>"+
						        "  <h4 class='modal-title'>Número Psíquico</h4>"+
						         " <button type='button' class='close' data-dismiss='modal'>&times;</button>"+
						        "</div>"+
						        
						        "<!-- Modal body -->"+
						        "<div class='modal-body'>"+
						          ep+
						        "</div>"+
						        
						        "<!-- Modal footer -->"+
						        "<div class='modal-footer'>"+
						         " <button type='button' class='btn btn-danger' data-dismiss='modal'>Fechar</button>"+
						        "</div>"+
						        
						      "</div>"+
						    "</div>"+
						  "</div>"+
	                "<br><br>Lição Cármica: "+carmica+
	                "<br><br>TO: "+to6+
	                "<br><br>Resposta subconsciente: "+rb+" - "+
	                " "+"<button type='button' class='btn btn-outline-primary btn-sm' data-toggle='modal' data-target='#myModal7'>"+
					    "Ler +"+
					  "</button>"+
					  "<div class='modal fade' id='myModal7'>"+
						    "<div class='modal-dialog modal-xl'>"+
						     " <div class='modal-content'>"+
						      
						      "  <!-- Modal Header -->"+
						       " <div class='modal-header'>"+
						        "  <h4 class='modal-title'>Resposta Subconsciente</h4>"+
						         " <button type='button' class='close' data-dismiss='modal'>&times;</button>"+
						        "</div>"+
						        
						        "<!-- Modal body -->"+
						        "<div class='modal-body'>"+
						          erb+
						        "</div>"+
						        
						        "<!-- Modal footer -->"+
						        "<div class='modal-footer'>"+
						         " <button type='button' class='btn btn-danger' data-dismiss='modal'>Fechar</button>"+
						        "</div>"+
						        
						      "</div>"+
						    "</div>"+
						  "</div>"+
	                "<br><br>Harmonia Conjugal: "+hc7+" - "+
	                " "+"<button type='button' class='btn btn-outline-primary btn-sm' data-toggle='modal' data-target='#myModal8'>"+
					    "Ler +"+
					  "</button>"+
					  "<div class='modal fade' id='myModal8'>"+
						    "<div class='modal-dialog modal-xl'>"+
						     " <div class='modal-content'>"+
						      
						      "  <!-- Modal Header -->"+
						       " <div class='modal-header'>"+
						        "  <h4 class='modal-title'>Harmonia Conjugal</h4>"+
						         " <button type='button' class='close' data-dismiss='modal'>&times;</button>"+
						        "</div>"+
						        
						        "<!-- Modal body -->"+
						        "<div class='modal-body'>"+
						          ehc+
						        "</div>"+
						        
						        "<!-- Modal footer -->"+
						        "<div class='modal-footer'>"+
						         " <button type='button' class='btn btn-danger' data-dismiss='modal'>Fechar</button>"+
						        "</div>"+
						        
						      "</div>"+
						    "</div>"+
						  "</div>"+
						  "<br><br>Dívida Cármica: "+dc7+" - "+
	                " "+"<button type='button' class='btn btn-outline-primary btn-sm' data-toggle='modal' data-target='#myModal9'>"+
					    "Ler +"+
					  "</button>"+
					  "<div class='modal fade' id='myModal9'>"+
						    "<div class='modal-dialog modal-xl'>"+
						     " <div class='modal-content'>"+
						      
						      "  <!-- Modal Header -->"+
						       " <div class='modal-header'>"+
						        "  <h4 class='modal-title'>Dívida Cármica</h4>"+
						         " <button type='button' class='close' data-dismiss='modal'>&times;</button>"+
						        "</div>"+
						        
						        "<!-- Modal body -->"+
						        "<div class='modal-body'>"+
						          edc+
						        "</div>"+
						        
						        "<!-- Modal footer -->"+
						        "<div class='modal-footer'>"+
						         " <button type='button' class='btn btn-danger' data-dismiss='modal'>Fechar</button>"+
						        "</div>"+
						        
						      "</div>"+
						    "</div>"+
						  "</div>"+
					"<br><br>Números Harmônicos: "+nh7+"<br>"+
					"<br><br>Números Neutros: "+nn7+"<br>"+
					"<br><br>Números Desfavoráveis: "+nd7+"<br>"+
					"<br><br>Primeiro Ciclo de Vida: De "+dataNascimento+" até "+primeiroCiclo+"<br>"+
					"<br><br>Vibração Primeiro Ciclo: "+vpc7+" - "+
	                " "+"<button type='button' class='btn btn-outline-primary btn-sm' data-toggle='modal' data-target='#myModal10'>"+
					    "Ler +"+
					  "</button>"+
					  "<div class='modal fade' id='myModal10'>"+
						    "<div class='modal-dialog modal-xl'>"+
						     " <div class='modal-content'>"+
						      
						      "  <!-- Modal Header -->"+
						       " <div class='modal-header'>"+
						        "  <h4 class='modal-title'>Vibração Primeiro Ciclo</h4>"+
						         " <button type='button' class='close' data-dismiss='modal'>&times;</button>"+
						        "</div>"+
						        
						        "<!-- Modal body -->"+
						        "<div class='modal-body'>"+
						          vpc+
						        "</div>"+
						        
						        "<!-- Modal footer -->"+
						        "<div class='modal-footer'>"+
						         " <button type='button' class='btn btn-danger' data-dismiss='modal'>Fechar</button>"+
						        "</div>"+
						        
						      "</div>"+
						    "</div>"+
						  "</div>"+
					"<br><br>Segundo Ciclo de Vida: De "+primeiroCiclo+" até "+segundoCiclo+"<br>"+

					"<br><br>Vibração Segundo Ciclo: "+vsc7+" - "+
	                " "+"<button type='button' class='btn btn-outline-primary btn-sm' data-toggle='modal' data-target='#myModal11'>"+
					    "Ler +"+
					  "</button>"+
					  "<div class='modal fade' id='myModal11'>"+
						    "<div class='modal-dialog modal-xl'>"+
						     " <div class='modal-content'>"+
						      
						      "  <!-- Modal Header -->"+
						       " <div class='modal-header'>"+
						        "  <h4 class='modal-title'>Vibração Segundo Ciclo</h4>"+
						         " <button type='button' class='close' data-dismiss='modal'>&times;</button>"+
						        "</div>"+
						        
						        "<!-- Modal body -->"+
						        "<div class='modal-body'>"+
						          vsc+
						        "</div>"+
						        
						        "<!-- Modal footer -->"+
						        "<div class='modal-footer'>"+
						         " <button type='button' class='btn btn-danger' data-dismiss='modal'>Fechar</button>"+
						        "</div>"+
						        
						      "</div>"+
						    "</div>"+
						  "</div>"+

					"<br><br>Terceiro Ciclo de Vida: De "+segundoCiclo+" até o final da vida.<br>"+
	                "<br><br>Grau de Ascenção: "+ga+"<br>";   

	    }

	</script>

</body>
</html>