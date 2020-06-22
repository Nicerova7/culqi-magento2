<?php

namespace Culqi\Pago\Block\Adminhtml\Form\Field;

class Info 
    extends \Magento\Backend\Block\AbstractBlock
    implements \Magento\Framework\Data\Form\Element\Renderer\RendererInterface
{
    public function __construct(
        
        \Magento\Framework\Filesystem\DirectoryList $dir
              
    ) {
        
        $this->_dir = $dir;
        
    }
    
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
       

        $html = '<div class="section-config with-button""> 
                    <div class="config-heading">
                        <div class="heading" style="background-color:#eee;padding:1em;border:1px solid #ddd;">
                            <strong>
                                Culqi<a class="link-more" href="https://www.culqi.com/docs" target="_blank"> Leer más</a>
                            </strong>
                            <span class="heading-intro"> Con Culqi comienza a aceptar pagos con tarjeta de crédito/debito y también PagoEfectivo (<b>¡Nuevo!</b>).</span>
                        </div>
                    </div>
                 </div>';
        return $html;
    }
}