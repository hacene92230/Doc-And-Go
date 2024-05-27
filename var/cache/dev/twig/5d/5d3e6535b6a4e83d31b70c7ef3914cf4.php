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

/* contact/_form.html.twig */
class __TwigTemplate_47907e0e02da5f6a01922574b0f2f94e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/_form.html.twig"));

        // line 1
        yield "<div class=\"grid grid-cols-6 gap-6 mt-4\"> <!-- Ajout du margin-top -->
    ";
        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["class" => "col-start-2 col-span-2"]]);
        yield "
   
 <div class=\"mt-16\"> <!-- Ajout de la marge-top -->

        <div class=\"grid grid-cols-2\">
\t\t<div class=\"col-start-1\">
                \t<label for=\"name\" class=\"block text-sm font-medium text-gray-700\">Votre prénom</label>
\t\t</div>
\t<div class=\"mt-1 col-start-2\">
                <div class=\"form-row\">
                        ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "input-field form-control w-100 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline", "placeholder" => "Prénom"]]);
        yield "
                </div>
        </div>
\t</div>

        <div class=\"grid grid-cols-2\">
\t\t<div class=\"col-start-1\">
                \t<label for=\"email\" class=\"block text-sm font-medium text-gray-700\">Votre adresse email</label>
            </div>
            <div class=\"mt-1 col-start-2\">
                <div class=\"form-row\">
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "input-field form-control w-100 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline", "placeholder" => "Adresse email"]]);
        yield "
                </div>
            </div>
        </div>

        <div class=\"grid grid-cols-2\">
            <div class=\"col-start-1\">
                <label for=\"phone\" class=\"block text-sm font-medium text-gray-700\">Saisir votre numéro de téléphone</label>
            </div>
        <div class=\"mt-1 col-start-2\">
            <div class=\"form-row\">
                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "phone", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "input-field form-control w-100 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline", "placeholder" => "Votre numéro de téléphone"]]);
        yield "
            </div>
            </div>
        </div>

        <div class=\"grid grid-cols-2\">
            <div class=\"col-start-1\">
                <label for=\"subject\" class=\"block text-sm font-medium text-gray-700\">Objet de votre demande</label>
            </div>
            <div class=\"mt-1 col-start-2\">
                <div class=\"form-row\">
                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "subject", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "input-field form-control w-100 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline", "placeholder" => "Votre demande"]]);
        yield "
                </div>
            </div>
        </div>

        <div class=\"grid grid-cols-2\">
            <div class=\"col-start-1\">
                <label for=\"content\" class=\"block text-sm font-medium text-gray-700\">Saisir le contenu de votre message</label>
            </div>
            <div class=\"mt-1 col-start-2\">
                <div class=\"form-row\">
                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "content", [], "any", false, false, false, 56), 'row', ["attr" => ["class" => "textarea-field resize form-control w-100 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline", "placeholder" => "Votre message..."]]);
        yield "
                </div>
            </div>


        <button type=\"submit\" class=\"btn btn-primary flex items-center justify-center text-white bg-vert-fonce my-4 mx-4 px-4 py-2 rounded hover:transition delay-100 duration-200 hover:scale-110\">
            <span>Transmettre ma demande</span>
            <span class=\"ml-2\"><i class=\"fas fa-paper-plane\"></i></span> <!-- Icone Font Awesome -->
        </button>
    </div>   

    ";
        // line 67
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_end');
        yield "

</div>


<!-- Bloc d'informations email -->
    <div class=\" col-start-4 col-span-2 mt-24\"> <!-- Ajout de la marge-top -->
        <div class=\"border border-gray-300 p-4 rounded\">
            <h2 class=\"text-lg font-medium mb-2\">Informations de contact</h2>
            <p><strong>Email:</strong> contact@doc-and-go.fr</p>
            <p><strong>Adresse:</strong> 24 avenue Liégegard, 93270 Sevran</p>
            <p><strong>Téléphone:</strong> 0782219453</p>
        </div>
    </div>
        </div>

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
        return "contact/_form.html.twig";
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
        return array (  130 => 67,  116 => 56,  102 => 45,  88 => 34,  74 => 23,  60 => 12,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"grid grid-cols-6 gap-6 mt-4\"> <!-- Ajout du margin-top -->
    {{ form_start(form, {'attr': {'class': 'col-start-2 col-span-2'}}) }}
   
 <div class=\"mt-16\"> <!-- Ajout de la marge-top -->

        <div class=\"grid grid-cols-2\">
\t\t<div class=\"col-start-1\">
                \t<label for=\"name\" class=\"block text-sm font-medium text-gray-700\">Votre prénom</label>
\t\t</div>
\t<div class=\"mt-1 col-start-2\">
                <div class=\"form-row\">
                        {{ form_row(form.name, {'attr': {'class': 'input-field form-control w-100 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', 'placeholder': 'Prénom'}}) }}
                </div>
        </div>
\t</div>

        <div class=\"grid grid-cols-2\">
\t\t<div class=\"col-start-1\">
                \t<label for=\"email\" class=\"block text-sm font-medium text-gray-700\">Votre adresse email</label>
            </div>
            <div class=\"mt-1 col-start-2\">
                <div class=\"form-row\">
                        {{ form_row(form.email, {'attr': {'class': 'input-field form-control w-100 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', 'placeholder': 'Adresse email'}}) }}
                </div>
            </div>
        </div>

        <div class=\"grid grid-cols-2\">
            <div class=\"col-start-1\">
                <label for=\"phone\" class=\"block text-sm font-medium text-gray-700\">Saisir votre numéro de téléphone</label>
            </div>
        <div class=\"mt-1 col-start-2\">
            <div class=\"form-row\">
                    {{ form_row(form.phone, {'attr': {'class': 'input-field form-control w-100 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', 'placeholder': 'Votre numéro de téléphone'}}) }}
            </div>
            </div>
        </div>

        <div class=\"grid grid-cols-2\">
            <div class=\"col-start-1\">
                <label for=\"subject\" class=\"block text-sm font-medium text-gray-700\">Objet de votre demande</label>
            </div>
            <div class=\"mt-1 col-start-2\">
                <div class=\"form-row\">
                    {{ form_row(form.subject, {'attr': {'class': 'input-field form-control w-100 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', 'placeholder': 'Votre demande'}}) }}
                </div>
            </div>
        </div>

        <div class=\"grid grid-cols-2\">
            <div class=\"col-start-1\">
                <label for=\"content\" class=\"block text-sm font-medium text-gray-700\">Saisir le contenu de votre message</label>
            </div>
            <div class=\"mt-1 col-start-2\">
                <div class=\"form-row\">
                    {{ form_row(form.content, {'attr': {'class': 'textarea-field resize form-control w-100 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', 'placeholder': 'Votre message...'}}) }}
                </div>
            </div>


        <button type=\"submit\" class=\"btn btn-primary flex items-center justify-center text-white bg-vert-fonce my-4 mx-4 px-4 py-2 rounded hover:transition delay-100 duration-200 hover:scale-110\">
            <span>Transmettre ma demande</span>
            <span class=\"ml-2\"><i class=\"fas fa-paper-plane\"></i></span> <!-- Icone Font Awesome -->
        </button>
    </div>   

    {{ form_end(form) }}

</div>


<!-- Bloc d'informations email -->
    <div class=\" col-start-4 col-span-2 mt-24\"> <!-- Ajout de la marge-top -->
        <div class=\"border border-gray-300 p-4 rounded\">
            <h2 class=\"text-lg font-medium mb-2\">Informations de contact</h2>
            <p><strong>Email:</strong> contact@doc-and-go.fr</p>
            <p><strong>Adresse:</strong> 24 avenue Liégegard, 93270 Sevran</p>
            <p><strong>Téléphone:</strong> 0782219453</p>
        </div>
    </div>
        </div>

", "contact/_form.html.twig", "/var/www/html/doc-and-go/templates/contact/_form.html.twig");
    }
}
