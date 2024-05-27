<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* search/new.html.twig */
class __TwigTemplate_dd8c2f991456df786ffc69010cb5b219 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/new.html.twig"));

        // line 1
        yield "<div class=\"flex items-center justify-center\">
    <div class=\"flex items-center\">
        <form id=\"searchForm\">
            <div class=\"form-row align-items-center\">
                <div class=\"col\">
                    <label for=\"search_searchField\">Recherche :</label>
                    <input type=\"text\" id=\"search_searchField\" name=\"searchField\" class=\"form-control\">
                </div>
            </div>
        </form>
    </div>
</div>

<div id=\"searchResultsContainer\"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('searchForm');
        var searchField = document.getElementById('search_searchField');
        var searchResultsContainer = document.getElementById('searchResultsContainer');
        var actionUrl = \"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search_new");
        yield "\";
        var specialityShowBaseUrl = \"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_speciality_show", ["id" => 0]);
        yield "\";
        specialityShowBaseUrl = specialityShowBaseUrl.replace(/0\$/, '');

        // Empêcher la soumission du formulaire avec la touche Entrée
        searchField.addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
            }
        });

        searchField.addEventListener('input', function() {
            var searchTerm = searchField.value;

            if (searchTerm.length >= 4) {
                fetch(actionUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({ searchField: searchTerm }),
                })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(data => { throw new Error(data.error || 'Erreur inconnue') });
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.length === 0) {
                        searchResultsContainer.innerHTML = '<h2 class=\"text-red-500\">Erreur: Aucun résultat trouvé.</h2>';
                    } else {
                        searchResultsContainer.innerHTML = '<h2 class=\"text-center text-red-500\">Résultats de la recherche :</h2>' + 
                                                            data.map(item => `<a href=\"\${specialityShowBaseUrl}\${item.id}\">\${item.name}</a>`).join('');
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    searchResultsContainer.innerHTML = '<h2 class=\"text-red-500\">Erreur: ' + error.message + '</h2>';
                });
            } else if (searchTerm.length === 0) {
                searchResultsContainer.innerHTML = '';
            } else {
                searchResultsContainer.innerHTML = '<h2 class=\"text-red-500\">Erreur: Le terme de recherche doit comporter au moins 4 caractères.</h2>';
            }
        });
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "search/new.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  70 => 22,  66 => 21,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"flex items-center justify-center\">
    <div class=\"flex items-center\">
        <form id=\"searchForm\">
            <div class=\"form-row align-items-center\">
                <div class=\"col\">
                    <label for=\"search_searchField\">Recherche :</label>
                    <input type=\"text\" id=\"search_searchField\" name=\"searchField\" class=\"form-control\">
                </div>
            </div>
        </form>
    </div>
</div>

<div id=\"searchResultsContainer\"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('searchForm');
        var searchField = document.getElementById('search_searchField');
        var searchResultsContainer = document.getElementById('searchResultsContainer');
        var actionUrl = \"{{ path('app_search_new') }}\";
        var specialityShowBaseUrl = \"{{ path('app_speciality_show', { 'id': 0 }) }}\";
        specialityShowBaseUrl = specialityShowBaseUrl.replace(/0\$/, '');

        // Empêcher la soumission du formulaire avec la touche Entrée
        searchField.addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
            }
        });

        searchField.addEventListener('input', function() {
            var searchTerm = searchField.value;

            if (searchTerm.length >= 4) {
                fetch(actionUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({ searchField: searchTerm }),
                })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(data => { throw new Error(data.error || 'Erreur inconnue') });
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.length === 0) {
                        searchResultsContainer.innerHTML = '<h2 class=\"text-red-500\">Erreur: Aucun résultat trouvé.</h2>';
                    } else {
                        searchResultsContainer.innerHTML = '<h2 class=\"text-center text-red-500\">Résultats de la recherche :</h2>' + 
                                                            data.map(item => `<a href=\"\${specialityShowBaseUrl}\${item.id}\">\${item.name}</a>`).join('');
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    searchResultsContainer.innerHTML = '<h2 class=\"text-red-500\">Erreur: ' + error.message + '</h2>';
                });
            } else if (searchTerm.length === 0) {
                searchResultsContainer.innerHTML = '';
            } else {
                searchResultsContainer.innerHTML = '<h2 class=\"text-red-500\">Erreur: Le terme de recherche doit comporter au moins 4 caractères.</h2>';
            }
        });
    });
</script>
", "search/new.html.twig", "/var/www/html/doc-and-go/templates/search/new.html.twig");
    }
}
