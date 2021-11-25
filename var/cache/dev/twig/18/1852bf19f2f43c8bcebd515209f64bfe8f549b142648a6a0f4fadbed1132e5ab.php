<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/login.html.twig */
class __TwigTemplate_ed36d61fa15825ec144adae100784222c28eb93f7957bb0b7e711b94f9cfa313 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <section class=\"login py-5 border-top-1\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-5 col-md-8 align-item-center\">
                    <div class=\"border\">
                        <h3 class=\"bg-gray p-4\">Login Now</h3>
                        <form action=\"#\">
                            <fieldset class=\"p-4\">
                                <input type=\"text\" placeholder=\"Username\" class=\"border p-3 w-100 my-2\">
                                <input type=\"password\" placeholder=\"Password\" class=\"border p-3 w-100 my-2\">
                                <div class=\"loggedin-forgot\">
                                    <input type=\"checkbox\" id=\"keep-me-logged-in\">
                                    <label for=\"keep-me-logged-in\" class=\"pt-3 pb-2\">Keep me logged in</label>
                                </div>
                                <button type=\"submit\" class=\"d-block py-3 px-5 bg-danger text-white border-0 rounded font-weight-bold mt-3\">Log in</button>
                                <a class=\"mt-3 d-block  text-danger\" href=\"#\">Forget Password?</a>
                                <a class=\"mt-3 d-inline-block text-danger\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("register");
        echo "\">Register Now</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

    <section class=\"login py-5 border-top-1\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-5 col-md-8 align-item-center\">
                    <div class=\"border\">
                        <h3 class=\"bg-gray p-4\">Login Now</h3>
                        <form action=\"#\">
                            <fieldset class=\"p-4\">
                                <input type=\"text\" placeholder=\"Username\" class=\"border p-3 w-100 my-2\">
                                <input type=\"password\" placeholder=\"Password\" class=\"border p-3 w-100 my-2\">
                                <div class=\"loggedin-forgot\">
                                    <input type=\"checkbox\" id=\"keep-me-logged-in\">
                                    <label for=\"keep-me-logged-in\" class=\"pt-3 pb-2\">Keep me logged in</label>
                                </div>
                                <button type=\"submit\" class=\"d-block py-3 px-5 bg-danger text-white border-0 rounded font-weight-bold mt-3\">Log in</button>
                                <a class=\"mt-3 d-block  text-danger\" href=\"#\">Forget Password?</a>
                                <a class=\"mt-3 d-inline-block text-danger\" href=\"{{ url('register') }}\">Register Now</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock content %}", "pages/login.html.twig", "/home/delvauxjulene/projet_dynamqiue-0305feaf41799d1708c7702a120c054be1a34d54/templates/pages/login.html.twig");
    }
}
