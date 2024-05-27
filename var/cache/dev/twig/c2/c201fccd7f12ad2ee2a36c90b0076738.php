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

/* home/valeur.html.twig */
class __TwigTemplate_1344f2f14b5258fcc6b2e29a7b4cb8e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/valeur.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/valeur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/valeur.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " Nos valeurs ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container mx-auto px-4 py-8\">
    <h1 class=\"text-3xl font-bold mb-4\">Nos Valeurs</h1>
    
    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8\">
        <!-- Intégrité -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4\">Intégrité</h2>
            <p>Nous agissons avec honnêteté, équité et transparence dans toutes nos interactions.</p>
            <ul class=\"list-disc pl-6 mt-2\">
                <li>Nous honorons nos engagements envers nos clients, partenaires et employés.</li>
                <li>Nous communiquons ouvertement et franchement, même lorsque cela est difficile.</li>
                <li>Nous nous conformons toujours aux normes éthiques les plus élevées.</li>
            </ul>
        </div>

        <!-- Collaboration -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4\">Collaboration</h2>
            <p>Nous croyons au pouvoir du travail d'équipe et à la valeur de la diversité des idées.</p>
            <ul class=\"list-disc pl-6 mt-2\">
                <li>Nous encourageons la diversité d'opinions et la prise de décision participative.</li>
                <li>Nous travaillons en étroite collaboration avec tous les membres de notre équipe pour atteindre nos objectifs communs.</li>
                <li>Nous reconnaissons et célébrons les succès collectifs.</li>
            </ul>
        </div>

        <!-- Innovation -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4\">Innovation</h2>
            <p>Nous sommes constamment à la recherche de nouvelles idées et de nouvelles façons de faire les choses.</p>
            <ul class=\"list-disc pl-6 mt-2\">
                <li>Nous encourageons la créativité, la curiosité et l'audace dans tout ce que nous faisons.</li>
                <li>Nous investissons dans la recherche et le développement pour rester à la pointe de notre industrie.</li>
                <li>Nous adoptons une mentalité d'apprentissage continu et sommes ouverts aux nouvelles technologies et méthodologies.</li>
            </ul>
        </div>

        <!-- Responsabilité sociale -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4\">Responsabilité sociale</h2>
            <p>Nous nous engageons à avoir un impact positif sur nos communautés et sur l'environnement.</p>
            <ul class=\"list-disc pl-6 mt-2\">
                <li>Nous participons à des initiatives philanthropiques et à des actions bénévoles dans nos communautés.</li>
                <li>Nous adoptons des pratiques durables pour réduire notre empreinte environnementale.</li>
                <li>Nous respectons les normes éthiques et légales dans toutes nos opérations.</li>
            </ul>
        </div>

        <!-- Vivre Ensemble -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4\">Vivre Ensemble</h2>
            <p>Nous favorisons un environnement inclusif où chacun est respecté, valorisé et encouragé à contribuer pleinement.</p>
            <ul class=\"list-disc pl-6 mt-2\">
                <li>Nous célébrons la diversité et nous nous engageons à créer un lieu de travail où chacun se sent accepté et apprécié.</li>
                <li>Nous promouvons une culture de l'équité et de la justice, où les opportunités sont accessibles à tous.</li>
                <li>Nous encourageons le respect mutuel, la tolérance et la coopération entre collègues.</li>
            </ul>
        </div>

        <!-- Excellence -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4\">Excellence</h2>
            <p>Nous visons l'excellence dans tout ce que nous entreprenons, en nous efforçant continuellement de dépasser les attentes.</p>
            <ul class=\"list-disc pl-6 mt-2\">
                <li>Nous sommes déterminés à fournir des produits et des services de la plus haute qualité à nos clients.</li>
                <li>Nous nous engageons à l'amélioration continue et à l'innovation dans nos processus et nos pratiques.</li>
                <li>Nous recherchons constamment des moyens de nous surpasser et d'atteindre de nouveaux sommets d'excellence.</li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/valeur.html.twig";
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
        return array (  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Nos valeurs {% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8\">
    <h1 class=\"text-3xl font-bold mb-4\">Nos Valeurs</h1>
    
    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8\">
        <!-- Intégrité -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4\">Intégrité</h2>
            <p>Nous agissons avec honnêteté, équité et transparence dans toutes nos interactions.</p>
            <ul class=\"list-disc pl-6 mt-2\">
                <li>Nous honorons nos engagements envers nos clients, partenaires et employés.</li>
                <li>Nous communiquons ouvertement et franchement, même lorsque cela est difficile.</li>
                <li>Nous nous conformons toujours aux normes éthiques les plus élevées.</li>
            </ul>
        </div>

        <!-- Collaboration -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4\">Collaboration</h2>
            <p>Nous croyons au pouvoir du travail d'équipe et à la valeur de la diversité des idées.</p>
            <ul class=\"list-disc pl-6 mt-2\">
                <li>Nous encourageons la diversité d'opinions et la prise de décision participative.</li>
                <li>Nous travaillons en étroite collaboration avec tous les membres de notre équipe pour atteindre nos objectifs communs.</li>
                <li>Nous reconnaissons et célébrons les succès collectifs.</li>
            </ul>
        </div>

        <!-- Innovation -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4\">Innovation</h2>
            <p>Nous sommes constamment à la recherche de nouvelles idées et de nouvelles façons de faire les choses.</p>
            <ul class=\"list-disc pl-6 mt-2\">
                <li>Nous encourageons la créativité, la curiosité et l'audace dans tout ce que nous faisons.</li>
                <li>Nous investissons dans la recherche et le développement pour rester à la pointe de notre industrie.</li>
                <li>Nous adoptons une mentalité d'apprentissage continu et sommes ouverts aux nouvelles technologies et méthodologies.</li>
            </ul>
        </div>

        <!-- Responsabilité sociale -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4\">Responsabilité sociale</h2>
            <p>Nous nous engageons à avoir un impact positif sur nos communautés et sur l'environnement.</p>
            <ul class=\"list-disc pl-6 mt-2\">
                <li>Nous participons à des initiatives philanthropiques et à des actions bénévoles dans nos communautés.</li>
                <li>Nous adoptons des pratiques durables pour réduire notre empreinte environnementale.</li>
                <li>Nous respectons les normes éthiques et légales dans toutes nos opérations.</li>
            </ul>
        </div>

        <!-- Vivre Ensemble -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4\">Vivre Ensemble</h2>
            <p>Nous favorisons un environnement inclusif où chacun est respecté, valorisé et encouragé à contribuer pleinement.</p>
            <ul class=\"list-disc pl-6 mt-2\">
                <li>Nous célébrons la diversité et nous nous engageons à créer un lieu de travail où chacun se sent accepté et apprécié.</li>
                <li>Nous promouvons une culture de l'équité et de la justice, où les opportunités sont accessibles à tous.</li>
                <li>Nous encourageons le respect mutuel, la tolérance et la coopération entre collègues.</li>
            </ul>
        </div>

        <!-- Excellence -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4\">Excellence</h2>
            <p>Nous visons l'excellence dans tout ce que nous entreprenons, en nous efforçant continuellement de dépasser les attentes.</p>
            <ul class=\"list-disc pl-6 mt-2\">
                <li>Nous sommes déterminés à fournir des produits et des services de la plus haute qualité à nos clients.</li>
                <li>Nous nous engageons à l'amélioration continue et à l'innovation dans nos processus et nos pratiques.</li>
                <li>Nous recherchons constamment des moyens de nous surpasser et d'atteindre de nouveaux sommets d'excellence.</li>
            </ul>
        </div>
    </div>
</div>
{% endblock %}
", "home/valeur.html.twig", "/var/www/html/doc-and-go/templates/home/valeur.html.twig");
    }
}
