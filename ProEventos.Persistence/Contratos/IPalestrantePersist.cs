using ProEventos.Domain;
using System.Threading.Tasks;

namespace ProEventos.Persistence.Contratos
{
    public interface IPalestrantePersist
    {
        //PALESTRANTES

        Task<Palestrante[]> GetAllPalestrantesByNomeAsync(string nome, bool includeEventos);

        Task<Palestrante[]> GetAllEPalestrantesAsync(bool includeEventos);

        Task<Palestrante> GetPalestranteByIdAsync(int PalestranteId, bool includeEventos);


    }
}
