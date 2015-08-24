function confirmation() {
	var answer = confirm("Delete user")
	if (answer){
		alert("Entry Deleted")
		window.location = "links.php?act=trackdelete&id=<? echo $row['id']; ?>";
	}
	else{
		alert("No action taken")
	}
}
