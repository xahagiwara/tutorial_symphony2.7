<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Common/note.html.twig */
class __TwigTemplate_bef288184d045222e13bb38e6c69479b54d6dbd441e492f05c02a60ac676526f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/note.html.twig"));

        // line 1
        echo "<section class=\"note-sec\">
    <div class=\"container\">
        <div class=\"row text-center pad-row\" >
            <div class=\"col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 \">
                <i class=\"fa fa-quote-left fa-3x\"></i>
                <p>
                    音楽とは、
                    生涯にわたる修練と深い研究を必要とする技芸なのです。
                    <br />
                    マルティーニ神父
                </p>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/note.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"note-sec\">
    <div class=\"container\">
        <div class=\"row text-center pad-row\" >
            <div class=\"col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 \">
                <i class=\"fa fa-quote-left fa-3x\"></i>
                <p>
                    音楽とは、
                    生涯にわたる修練と深い研究を必要とする技芸なのです。
                    <br />
                    マルティーニ神父
                </p>
            </div>
        </div>
    </div>
</section>
", "Common/note.html.twig", "/Users/xearts/Desktop/Hagiwara Shion/tutorial_symphony2.7/app/Resources/views/Common/note.html.twig");
    }
}
