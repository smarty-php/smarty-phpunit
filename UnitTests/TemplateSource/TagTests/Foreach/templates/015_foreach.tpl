{foreach item=x name=foo from=[0,1]}{$x}{foreachelse}else{/foreach}{if $x@show}show{else}noshow{/if}