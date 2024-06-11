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

/* shared/footer.html.twig */
class __TwigTemplate_2bd3aa9211477390c10c2b652294313a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/footer.html.twig"));

        // line 1
        yield "<footer class=\"bg-white flex justify-center border-solid border-black mt-5 py-8\">

    <div class=\"container px-6 text-center\">  
<hr class=\"my-6  border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8\" />  
        <div class=\"flex justify-around\">      
            
            <div class=\"w-full lg:w-1/3 mb-6\">
                <h5 class=\"text-lg font-bold text-vert mb-4\">Réseaux sociaux</h5>
                <ul class=\"list-none flex justify-center\">
                    <li class=\"mb-2 mx-3\"><a href=\"#\" class=\"text-gray-700 hover:text-gray-900\"><i class=\"fab fa-facebook-square text-2xl\"></i></a></li>
                    <li class=\"mb-2 mx-3\"><a href=\"#\" class=\"text-gray-700 hover:text-gray-900\"><i class=\"fab fa-twitter-square text-2xl\"></i></a></li>
                    <li class=\"mb-2 mx-3\"><a href=\"#\" class=\"text-gray-700 hover:text-gray-900\"><i class=\"fab fa-instagram-square text-2xl\"></i></a></li>
                </ul>
            </div>

            <div class=\"w-full lg:w-1/3 mb-6\">
                <h5 class=\"text-lg font-bold text-vert mb-4\">À propos</h5>
                <ul class=\"list-none\">
                    <li class=\"mb-2\"><a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_politique");
        yield "\" class=\"text-gray-700 hover:text-gray-900\">Politique de confidentialité</a></li>
                    <li class=\"mb-2\"><a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_valeur");
        yield "\" class=\"text-gray-700 hover:text-gray-900\">Nos valeurs</a></li>
                    <li class=\"mb-2\"><a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cgu");
        yield "\" class=\"text-gray-700 hover:text-gray-900\">Conditions générales d'utilisation</a></li>
                </ul>
            </div>

        </div>

        <div class=\"text-center mt-8\">
            <p class=\"text-gray-700 mb-0\">
                © Tous droits réservés DOC-AND-GO ";
        // line 29
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, "now", "Y"), "html", null, true);
        yield "-";
        $context["next_year"] = (Twig\Extension\CoreExtension::dateFormatFilter($this->env, "now", "Y") + 1);
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["next_year"]) || array_key_exists("next_year", $context) ? $context["next_year"] : (function () { throw new RuntimeError('Variable "next_year" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "
            </p>
        </div>

    </div>
</footer>
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
        return "shared/footer.html.twig";
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
        return array (  83 => 29,  72 => 21,  68 => 20,  64 => 19,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"bg-white flex justify-center border-solid border-black mt-5 py-8\">

    <div class=\"container px-6 text-center\">  
<hr class=\"my-6  border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8\" />  
        <div class=\"flex justify-around\">      
            
            <div class=\"w-full lg:w-1/3 mb-6\">
                <h5 class=\"text-lg font-bold text-vert mb-4\">Réseaux sociaux</h5>
                <ul class=\"list-none flex justify-center\">
                    <li class=\"mb-2 mx-3\"><a href=\"#\" class=\"text-gray-700 hover:text-gray-900\"><i class=\"fab fa-facebook-square text-2xl\"></i></a></li>
                    <li class=\"mb-2 mx-3\"><a href=\"#\" class=\"text-gray-700 hover:text-gray-900\"><i class=\"fab fa-twitter-square text-2xl\"></i></a></li>
                    <li class=\"mb-2 mx-3\"><a href=\"#\" class=\"text-gray-700 hover:text-gray-900\"><i class=\"fab fa-instagram-square text-2xl\"></i></a></li>
                </ul>
            </div>

            <div class=\"w-full lg:w-1/3 mb-6\">
                <h5 class=\"text-lg font-bold text-vert mb-4\">À propos</h5>
                <ul class=\"list-none\">
                    <li class=\"mb-2\"><a href=\"{{ path('app_politique') }}\" class=\"text-gray-700 hover:text-gray-900\">Politique de confidentialité</a></li>
                    <li class=\"mb-2\"><a href=\"{{ path('app_valeur') }}\" class=\"text-gray-700 hover:text-gray-900\">Nos valeurs</a></li>
                    <li class=\"mb-2\"><a href=\"{{ path('app_cgu') }}\" class=\"text-gray-700 hover:text-gray-900\">Conditions générales d'utilisation</a></li>
                </ul>
            </div>

        </div>

        <div class=\"text-center mt-8\">
            <p class=\"text-gray-700 mb-0\">
                © Tous droits réservés DOC-AND-GO {{ 'now'|date('Y') }}-{% set next_year = 'now'|date('Y')+1 %}{{ next_year }}
            </p>
        </div>

    </div>
</footer>
", "shared/footer.html.twig", "/var/www/html/doc-and-go/templates/shared/footer.html.twig");
    }
}
