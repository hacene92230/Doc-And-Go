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

/* base.html.twig */
class __TwigTemplate_8dbe456d53472e426ac112e83090ec3a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>
        ";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 7
        yield "    </title>
    ";
        // line 8
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 53
        yield "</head>
<body>
    ";
        // line 55
        yield from         $this->loadTemplate("shared/header.html.twig", "base.html.twig", 55)->unwrap()->yield($context);
        // line 56
        yield "
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "flashes", [], "any", false, false, false, 57));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 58
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 59
                yield "            <div class=\"bg-";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["type"], "html", null, true);
                yield "-100 border border-";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["type"], "html", null, true);
                yield "-400 text-";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["type"], "html", null, true);
                yield "-700 px-4 py-3 rounded relative\" role=\"alert\">
                ";
                // line 60
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["message"], "html", null, true);
                yield "
                <span class=\"absolute top-0 bottom-0 right-0 px-4 py-3\" role=\"button\" aria-label=\"Close\" onclick=\"this.parentElement.style.display='none';\">
                    <svg class=\"fill-current h-6 w-6 text-";
                // line 62
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["type"], "html", null, true);
                yield "-500\" role=\"button\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\"><path d=\"M14.348 5.652a1 1 0 010 1.414L11.414 10l2.934 2.934a1 1 0 01-1.414 1.414L10 11.414l-2.934 2.934a1 1 0 01-1.414-1.414L8.586 10 5.652 7.066a1 1 0 011.414-1.414L10 8.586l2.934-2.934a1 1 0 011.414 0z\"/></svg>
                </span>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "
    <main>
                        <!-- Barre de recherche -->
                    
        ";
        // line 71
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 73
        yield "    </main>

    ";
        // line 75
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 77
        yield "    
    ";
        // line 78
        yield from         $this->loadTemplate("shared/footer.html.twig", "base.html.twig", 78)->unwrap()->yield($context);
        // line 79
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "DOC-AND-GO";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        yield "    <link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css\"> 
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0\" />
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://kit.fontawesome.com/88e99c3c1e.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.tailwindcss.com\"></script>    
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js\"></script>
    
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                'vert': '#009C91',
\t\t        'vert-fonce':'#226D68',
              }
            }
          }
        }
    </script>
    <style>
        @font-face {
            font-family: 'Britannic Bold Regular';
            src: url('fonts/BritannicBoldRegular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        /* Media queries pour rendre le site responsive */
        @media (max-width: 640px) {
            /* Ajoutez vos styles CSS pour les petits écrans ici */
        }

        @media (min-width: 640px) and (max-width: 1024px) {
            /* Ajoutez vos styles CSS pour les écrans moyens ici */
        }

        @media (min-width: 1024px) {
            /* Ajoutez vos styles CSS pour les grands écrans ici */
        }
    </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 72
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 75
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  257 => 76,  247 => 75,  236 => 72,  226 => 71,  172 => 9,  162 => 8,  142 => 6,  129 => 79,  127 => 78,  124 => 77,  122 => 75,  118 => 73,  116 => 71,  110 => 67,  104 => 66,  94 => 62,  89 => 60,  80 => 59,  75 => 58,  71 => 57,  68 => 56,  66 => 55,  62 => 53,  60 => 8,  57 => 7,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>
        {% block title %}DOC-AND-GO{% endblock %}
    </title>
    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css\"> 
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0\" />
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://kit.fontawesome.com/88e99c3c1e.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.tailwindcss.com\"></script>    
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js\"></script>
    
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                'vert': '#009C91',
\t\t        'vert-fonce':'#226D68',
              }
            }
          }
        }
    </script>
    <style>
        @font-face {
            font-family: 'Britannic Bold Regular';
            src: url('fonts/BritannicBoldRegular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        /* Media queries pour rendre le site responsive */
        @media (max-width: 640px) {
            /* Ajoutez vos styles CSS pour les petits écrans ici */
        }

        @media (min-width: 640px) and (max-width: 1024px) {
            /* Ajoutez vos styles CSS pour les écrans moyens ici */
        }

        @media (min-width: 1024px) {
            /* Ajoutez vos styles CSS pour les grands écrans ici */
        }
    </style>
    {% endblock %}
</head>
<body>
    {% include \"shared/header.html.twig\" %}

    {% for type, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"bg-{{ type }}-100 border border-{{ type }}-400 text-{{ type }}-700 px-4 py-3 rounded relative\" role=\"alert\">
                {{ message }}
                <span class=\"absolute top-0 bottom-0 right-0 px-4 py-3\" role=\"button\" aria-label=\"Close\" onclick=\"this.parentElement.style.display='none';\">
                    <svg class=\"fill-current h-6 w-6 text-{{ type }}-500\" role=\"button\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\"><path d=\"M14.348 5.652a1 1 0 010 1.414L11.414 10l2.934 2.934a1 1 0 01-1.414 1.414L10 11.414l-2.934 2.934a1 1 0 01-1.414-1.414L8.586 10 5.652 7.066a1 1 0 011.414-1.414L10 8.586l2.934-2.934a1 1 0 011.414 0z\"/></svg>
                </span>
            </div>
        {% endfor %}
    {% endfor %}

    <main>
                        <!-- Barre de recherche -->
                    
        {% block body %}
        {% endblock %}
    </main>

    {% block javascripts %}
    {% endblock %}
    
    {% include \"shared/footer.html.twig\" %}
</body>
</html>
", "base.html.twig", "/var/www/html/doc-and-go/templates/base.html.twig");
    }
}
