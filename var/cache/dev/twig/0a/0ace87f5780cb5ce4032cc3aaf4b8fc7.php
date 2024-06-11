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
class __TwigTemplate_f43a589b78f4cf47b036a7e208916e73 extends Template
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

        yield "<div class=\" min-h-screen bg-gray-100 bg-[url('../public/images/fond-doc-and-go.png')] bg-no-repeat bg-contain\">
<div class=\"pr-96\">
<h2 class=\"text-white text-6xl font-bold pt-28 ml-11 \">Bienvenue sur DOC-AND-GO</h2>

</div>
    <div class=\"p-6 rounded-lg shadow-lg w-full max-w-lg bg-vert-fonce mt-6 ml-11\">       
        <form id=\"searchForm\" class=\" flex\">
            <label for=\"search_searchField\" class=\"sr-only\">Recherche :</label>
            <input type=\"text\" id=\"search_searchField\" name=\"searchField\" placeholder=\"Recherche\" class=\"w-full bg-gray-200 focus:outline-none focus:ring focus:border-blue-300 border border-gray-300 rounded py-2 px-4 mr-4\">
            <button class=\"bg-vert px-4 py-2 text-white font-bold rounded\">Rechercher</button>
\t</form>
\t</div>
</div>";
        
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
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\" min-h-screen bg-gray-100 bg-[url('../public/images/fond-doc-and-go.png')] bg-no-repeat bg-contain\">
<div class=\"pr-96\">
<h2 class=\"text-white text-6xl font-bold pt-28 ml-11 \">Bienvenue sur DOC-AND-GO</h2>

</div>
    <div class=\"p-6 rounded-lg shadow-lg w-full max-w-lg bg-vert-fonce mt-6 ml-11\">       
        <form id=\"searchForm\" class=\" flex\">
            <label for=\"search_searchField\" class=\"sr-only\">Recherche :</label>
            <input type=\"text\" id=\"search_searchField\" name=\"searchField\" placeholder=\"Recherche\" class=\"w-full bg-gray-200 focus:outline-none focus:ring focus:border-blue-300 border border-gray-300 rounded py-2 px-4 mr-4\">
            <button class=\"bg-vert px-4 py-2 text-white font-bold rounded\">Rechercher</button>
\t</form>
\t</div>
</div>", "search/new.html.twig", "/var/www/html/doc-and-go/templates/search/new.html.twig");
    }
}
