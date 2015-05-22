<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\furtakmShortcutType;
use furtakm\Tools\Shortcut;
class furtakmShortcutController extends Controller
{
    /**
     * @Route("/furtakm/shortcut/show/form", name="furtakm_shortcut_show_form")
     */
    public function showFormAction()
    {
        $s = new Shortcut();
        $v = $this->createCreateForm($s);
        return $this->render(
            'AppBundle:furtakmShortcut:form.html.twig',
            array(
                'mojNowyFormularz' => $v->createView()
            )
        );
    }
    /**
     * @Route("/furtakm/shortcut/calc", name="furtakm_shortcut_run")
     * @Method("POST")
     */
    public function convertAction(Request $request)
    {
        $s = new Shortcut();
        $v = $this->createCreateForm($s);
        $v->handleRequest($request);
        if ($v->isValid()) {
            return $this->render(
                'AppBundle:furtakmShortcut:result.html.twig',
                array('result' => $s->shortcut())
            );
        }
        return $this->render(
            'AppBundle:furtakmShortcut:form.html.twig',
            array(
                'mojNowyFormularz' => $v->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param Shortcut $shortcut The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Shortcut $shortcut)
    {
        $form = $this->createForm(new furtakmShortcutType(), $shortcut, array(
            'action' => $this->generateUrl('furtakm_shortcut_run'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Result'));
        return $form;
    }
}