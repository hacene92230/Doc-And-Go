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

/* user/_form.html.twig */
class __TwigTemplate_4c926bdd7fe406dd73945d20484adbfb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        yield "<div class=\"flex justify-center items-center h-screen\">
    <div class=\"w-full max-w-md\">
        ";
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start');
        yield "
        <div class=\"grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8\">
        <!-- Sexe -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                <span class=\"text-gray-600\">Sexe :</span>
                <i class=\"fas fa-venus text-gray-600\"></i>
                ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "gender", [], "any", false, false, false, 10), 'row', ["attr" => ["class" => "mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"]]);
        // line 12
        yield "
            </div>
        </div>

        <!-- Prénom -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                <span class=\"text-gray-600\">Prénom :</span>
                <i class=\"fas fa-user text-gray-600\"></i>
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "firstname", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"]]);
        // line 23
        yield "
            </div>
        </div>

        <!-- Nom -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                <span class=\"text-gray-600\">Nom :</span>
                <i class=\"fas fa-user text-gray-600\"></i>
                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "lastname", [], "any", false, false, false, 32), 'row', ["attr" => ["class" => "mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"]]);
        // line 34
        yield "
            </div>
        </div>

        <!-- Téléphone -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                <span class=\"text-gray-600\">Téléphone :</span>
                <i class=\"fas fa-phone text-gray-600\"></i>
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "phoneNumber", [], "any", false, false, false, 43), 'row', ["attr" => ["class" => "mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"]]);
        // line 45
        yield "
            </div>
        </div>

        <!-- Adresse -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                <span class=\"text-gray-600\">Adresse :</span>
                <i class=\"fas fa-map-marker-alt text-gray-600\"></i>
                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "street", [], "any", false, false, false, 54), 'row', ["attr" => ["class" => "mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"]]);
        // line 56
        yield "
            </div>
        </div>

        <!-- Ville -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                <span class=\"text-gray-600\">Ville :</span>
                <i class=\"fas fa-city text-gray-600\"></i>
                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "city", [], "any", false, false, false, 65), 'row', ["attr" => ["class" => "mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"]]);
        // line 67
        yield "
            </div>
        </div>

        <!-- Code postal -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                <span class=\"text-gray-600\">Code postal :</span>
                <i class=\"fas fa-mail-bulk text-gray-600\"></i>
                ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "zipCode", [], "any", false, false, false, 76), 'row', ["attr" => ["class" => "mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"]]);
        // line 78
        yield "
            </div>
        </div>

        <!-- Email -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                <span class=\"text-gray-600\">Email :</span>
                <i class=\"fas fa-envelope text-gray-600\"></i>
                ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "email", [], "any", false, false, false, 87), 'row', ["attr" => ["class" => "mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"]]);
        // line 89
        yield "
            </div>
        </div>
";
        // line 92
        if ( !(isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 92, $this->source); })())) {
            // line 93
            yield "
        <!-- Mot de passe -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                <span class=\"text-gray-600\">Mot de passe :</span>
                <i class=\"fas fa-lock text-gray-600\"></i>

    ";
            // line 100
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "plainPassword", [], "any", false, false, false, 100), "first", [], "any", false, false, false, 100), 'row', ["label" => "Mot de passe", "attr" => ["class" => "mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md", "minlength" => 8, "maxlength" => 20, "placeholder" => "Minimum 8 caractères"]]);
            // line 108
            yield "

    ";
            // line 110
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "plainPassword", [], "any", false, false, false, 110), "second", [], "any", false, false, false, 110), 'row', ["label" => "Confirmez le mot de passe", "attr" => ["class" => "mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md", "minlength" => 8, "maxlength" => 20, "placeholder" => "Confirmez votre mot de passe"]]);
            // line 118
            yield "            </div>
        </div>

        <!-- Accepter les termes -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                ";
            // line 124
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "agreeTerms", [], "any", false, false, false, 124), 'row', ["label_attr" => ["class" => "text-sm text-gray-700"], "attr" => ["class" => "mt-2 ml-4"]]);
            // line 127
            yield "
            </div>

        </div>

";
        }
        // line 133
        yield "
        <div class=\"mt-6\">
            <button type=\"submit\" class=\"inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500\">Inscription</button>
        </div>
        ";
        // line 137
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), 'form_end');
        yield "
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
        return "user/_form.html.twig";
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
        return array (  199 => 137,  193 => 133,  185 => 127,  183 => 124,  175 => 118,  173 => 110,  169 => 108,  167 => 100,  158 => 93,  156 => 92,  151 => 89,  149 => 87,  138 => 78,  136 => 76,  125 => 67,  123 => 65,  112 => 56,  110 => 54,  99 => 45,  97 => 43,  86 => 34,  84 => 32,  73 => 23,  71 => 21,  60 => 12,  58 => 10,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"flex justify-center items-center h-screen\">
    <div class=\"w-full max-w-md\">
        {{ form_start(form) }}
        <div class=\"grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8\">
        <!-- Sexe -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                <span class=\"text-gray-600\">Sexe :</span>
                <i class=\"fas fa-venus text-gray-600\"></i>
                {{ form_row(form.gender, {
                    'attr': {'class': 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md'}
                }) }}
            </div>
        </div>

        <!-- Prénom -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                <span class=\"text-gray-600\">Prénom :</span>
                <i class=\"fas fa-user text-gray-600\"></i>
                {{ form_row(form.firstname, {
                    'attr': {'class': 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md'}
                }) }}
            </div>
        </div>

        <!-- Nom -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                <span class=\"text-gray-600\">Nom :</span>
                <i class=\"fas fa-user text-gray-600\"></i>
                {{ form_row(form.lastname, {
                    'attr': {'class': 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md'}
                }) }}
            </div>
        </div>

        <!-- Téléphone -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                <span class=\"text-gray-600\">Téléphone :</span>
                <i class=\"fas fa-phone text-gray-600\"></i>
                {{ form_row(form.phoneNumber, {
                    'attr': {'class': 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md'}
                }) }}
            </div>
        </div>

        <!-- Adresse -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                <span class=\"text-gray-600\">Adresse :</span>
                <i class=\"fas fa-map-marker-alt text-gray-600\"></i>
                {{ form_row(form.street, {
                    'attr': {'class': 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md'}
                }) }}
            </div>
        </div>

        <!-- Ville -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                <span class=\"text-gray-600\">Ville :</span>
                <i class=\"fas fa-city text-gray-600\"></i>
                {{ form_row(form.city, {
                    'attr': {'class': 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md'}
                }) }}
            </div>
        </div>

        <!-- Code postal -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                <span class=\"text-gray-600\">Code postal :</span>
                <i class=\"fas fa-mail-bulk text-gray-600\"></i>
                {{ form_row(form.zipCode, {
                    'attr': {'class': 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md'}
                }) }}
            </div>
        </div>

        <!-- Email -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                <span class=\"text-gray-600\">Email :</span>
                <i class=\"fas fa-envelope text-gray-600\"></i>
                {{ form_row(form.email, {
                    'attr': {'class': 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md'}
                }) }}
            </div>
        </div>
{% if not edit_mode %}

        <!-- Mot de passe -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                <span class=\"text-gray-600\">Mot de passe :</span>
                <i class=\"fas fa-lock text-gray-600\"></i>

    {{ form_row(form.plainPassword.first, {
        'label': 'Mot de passe',
        'attr': {
            'class': 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md',
            'minlength': 8,
            'maxlength': 20,
            'placeholder': 'Minimum 8 caractères'
        }
    }) }}

    {{ form_row(form.plainPassword.second, {
        'label': 'Confirmez le mot de passe',
        'attr': {
            'class': 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md',
            'minlength': 8,
            'maxlength': 20,
            'placeholder': 'Confirmez votre mot de passe'
        }
    }) }}            </div>
        </div>

        <!-- Accepter les termes -->
        <div class=\"sm:col-span-2\">
            <div class=\"flex items-center space-x-4\">
                {{ form_row(form.agreeTerms, {
                    'label_attr': {'class': 'text-sm text-gray-700'},
                    'attr': {'class': 'mt-2 ml-4'}
                }) }}
            </div>

        </div>

{% endif %}

        <div class=\"mt-6\">
            <button type=\"submit\" class=\"inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500\">Inscription</button>
        </div>
        {{ form_end(form) }}
    </div>
</div>
", "user/_form.html.twig", "/var/www/html/Doc-And-Go/templates/user/_form.html.twig");
    }
}
