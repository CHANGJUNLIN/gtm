dataLayer.push({
        'currencyCode': '{/literal}{if $CC eq 'RMB'}CNY{else}{$CC}{/if}{literal}', // Local currency is optional.
		  'ecommerce': {
		    'detail' : {
		    	'products': [{
   	   		       'name': '{/literal}{$Tour.tourtitle_cn}(旅行团{$Tour.tourcode}){literal}',       // Name or ID is required.
   	   		       'id': '{/literal}{$Tour.tourcode}{literal}',
   	   		       'price': '{/literal}{if $Tour.gbflag eq 1}{$Tour.offprice.$CC}{else}{$Tour.prices.minprice.$CC}{/if}{literal}',
   	   		       'brand': '{/literal}{$Tour.operatorcode}{literal}',
   	   		       'category': '{/literal}{$Tour.state}{literal}'
   	   		     }]
		    }
		  }
	});
