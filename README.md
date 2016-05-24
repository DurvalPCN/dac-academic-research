## Analysing Microsoft Academic Research papers

<nav style='font-align:justify'>The main goal of the project is to analyse papers related to Informatics in Education [1] avaiable at Microsoft Academic Research, a platform containing thousands of papers from different conferences and journals. Using Open Data technologies and making it linked, according to material provided, along with the use of web technologies and tools like Open Refine, it was possible to generate an RDF [2] containing the data well-structured.

This project was made to be graded at the course of <a href="http://novatec.com.br/livros/dadosabertos/" target="_blank">Linked Open Data</a>, lectured by <a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4265484E4" target="_blank">Professor Ig Ibert Bittencourt</a> and available at <a href='http://www.ufal.edu.br/unidadeacademica/ic/graduacao/ciencia-da-computacao' target='_blank'>Computer Science</a> and <a href='http://www.ufal.edu.br/unidadeacademica/ic/graduacao/engenharia-de-computacao' target='_blank'>Computer Engineering</a> degrees of the <a href="http://www.ic.ufal.br" target="_blank">Institute of Computing</a> at <a href="http://www.ufal.edu.br" target="_blank">UFAL - Federal University of Alagoas</a>.

In the source files, you can find:

- folder `extracted-data` containing:
	- `papers-count10-authors.json` containing the data for each paper analysed, maximum 10 per author (you can see list of authors used at `php-api-extraction/authors.csv` )
- folder `php-jquery-extraction` containing:
	- `extraction.php` containing the code used (along with Academic Research API) to extract the data
	- `authors.csv` containing the list of authors to be searched in the Academic Research
- folder `google-refine-project.dac-academic-research` containing the exported project from OpenRefine

Feel free to perform a pull request to the project, implementing additional functions or improving some of the existents.

</nav>

### Applied Methodology

#### Data Analysis

We created the following structure based on the key attributes of each paper found on Academic Research.

- Papers
	- Article
		- Title
		- Publication
			- Publish Date
			- Conference/Journal
			- Authors
				- First Name
				- Last Name
				- Affiliation
			- Fields of Study
		- Abstract

#### PHP implementation

Using PHP [3] and operations with DOM [4], we captured only the necessary information and exported to JSON files.

### Linked Open Data

Linked Data is about using the Web to connect related data that wasn't previously linked, or using the Web to lower the barriers to linking data currently linked using other methods. More specifically, Wikipedia defines Linked Data as "a term used to describe a recommended best practice for exposing, sharing, and connecting pieces of data, information, and knowledge on the Semantic Web using URIs and RDF."

You can learn more about Linked Open Data in the <a href="http://novatec.com.br/livros/dadosabertos/" target="_blank">book of same name</a>, written by <a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4265484E4" target="_blank">Professor Ig Ibert Bittencourt</a> and <a href="http://isotani.caed-lab.com/" target="_blank">Professor Seiji Isotani</a>.

### Microsoft Academic Research

Microsoft Academic Research is an experimental research service developed by Microsoft Research to explore how scholars, scientists, students, and practitioners find academic content, researchers, institutions, and activities. Microsoft Academic Search indexes not only millions of academic publications, it also displays the key relationships between and among subjects, content, and authors, highlighting the critical links that help define scientific research. As is true of many research projects at Microsoft, this service is not intended to be a production Web site, and it will likely be taken offline when appropriate given the research goals of the project.

You can see more about it clicking <a href='http://academic.research.microsoft.com/' target='_blank'>here</a>.

### OpenRefine

OpenRefine (formerly Google Refine) is a powerful tool for working with messy data: cleaning it; transforming it from one format into another; and extending it with web services and external data.
Please note that since October 2nd, 2012, Google is not actively supporting this project, which has now been rebranded to OpenRefine. Project development, documentation and promotion is now fully supported by volunteers. Find out more about the history of OpenRefine and how you can help the community.

You can see more about it clicking <a href='http://openrefine.org/' target='_blank'>here</a>.

### Credits

Created by <a href="http://www.durvalpereira.com.br" target="_blank">Durval Pereira</a>. Contact me  <a href="mailto:contato@durvalpereira.com.br">here</a>.<br>
<a href="http://bit.ly/durvallattes" target="_blank">Lattes</a> <a href="https://www.linkedin.com/in/durvalpereira">LinkedIn</a> <a href="http://twitter.com/DurvalPCN">Twitter</a> <a href="http://www.facebook.com/durvalpereiracn">Facebook</a> <a href="http://plus.google.com/+DurvalPereiraCesar">Google+</a>

### References

[1] Informatics in Education, available at < https://en.wikipedia.org/wiki/Education_informatics > <br>
[2] RDF - Semantic Web Standards, available at < https://www.w3.org/RDF/ > <br>
[3] PHP, available at < http://php.net/ > <br>
[4] DOM - Document Object Model, available at < https://www.w3.org/DOM/ > <br>